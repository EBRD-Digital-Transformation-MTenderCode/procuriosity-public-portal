const {src, dest, watch, task, series, parallel} = require("gulp");

const clean = require("gulp-clean");

const scss = require("gulp-sass");
scss.compiler = require('node-sass');

const postcss = require("gulp-postcss");
const atImport = require('postcss-import');
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const base64 = require("gulp-base64");

const babel = require("gulp-babel");
const uglify = require("gulp-uglify-es").default;

const imagemin = require("gulp-imagemin");
const pngquant = require("imagemin-pngquant");
const cache = require("gulp-cache");

const paths = {
    scss: "./scss",
    js: "./js",
    img: "./img",
    build: "./../web"
};

const cleanBuildsTask = () => {
    return src([`${paths.build}/js/`, `${paths.build}/css/`, `${paths.build}/img/`])
};

const scssTask = () => {
    return src(`${paths.scss}/index.scss`)
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(scss().on("error", scss.logError))
        .pipe(postcss([
            atImport({
                skipDuplicates: false
            }),
            autoprefixer({browsers: ['last 1 version']}),
            cssnano()
        ]))
        .pipe(base64())
        .pipe(sourcemaps.write("."))
        .pipe(dest(`${paths.build}/css/`));
};

const jsTask = () => {
    return src(`${paths.js}/**/*.js`)
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(sourcemaps.write("."))
        .pipe(dest(`${paths.build}/js/`));
};

const imageminTask = () => {
    return src(`${paths.img}/**/*`)
        .pipe(
            cache(
                imagemin({
                    interlaced: true,
                    progressive: true,
                    svgoPlugins: [{removeViewBox: false}],
                    use: [pngquant()]
                })
            )
        )
        .pipe(dest(`${paths.build}/img/`));
};

const clearCacheTask = () => cache.clearAll();

const watchFiles = () => {
    watch(`${paths.scss}/**/*.scss`, scssTask);
    watch(`${paths.js}/**/*.js`, jsTask);
};

task("scssTask", scssTask);
task("jsTask", jsTask);
task("cleanBuildsTask", cleanBuildsTask);

task("build", series(cleanBuildsTask, clearCacheTask, parallel(scssTask, jsTask, imageminTask)));

task("watch", parallel(watchFiles));

task("default", series("build", parallel(watchFiles)));