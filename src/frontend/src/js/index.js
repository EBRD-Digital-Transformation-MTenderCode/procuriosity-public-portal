document.addEventListener("DOMContentLoaded", () => {

    const headerPhone = document.getElementById("header-phone");
    const footerPhone = document.getElementById("footer-phone");

    if (!((typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf("IEMobile") !== -1)) && headerPhone) {
        headerPhone.addEventListener("click", event => {
            event.preventDefault();
        })
    }

    if (!((typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf("IEMobile") !== -1)) && footerPhone) {
        footerPhone.addEventListener("click", event => {
            event.preventDefault();
        })
    }

    const html = document.querySelector("html");
    let langFromUrl;

    if ((/^(\/en|\/ru)/).test(window.location.pathname)) {
        langFromUrl = window.location.pathname.match(/(^\/en|\/ru)/)[0].replace(/\//g, "");
        html.setAttribute("lang", langFromUrl ? langFromUrl : "ro");
    }

    const localeToggle = document.getElementById("locale-toggle");
    const langsLinks = document.querySelectorAll('.locale-dropdown-menu .locale-lang');

    localeToggle.addEventListener("click", () => {
        if (!localeMenu.classList.contains("show")) {
            localeMenu.classList.add("show");
        }

        const pathWithoutLang = window.location.pathname.replace(/^(\/ru|\/en)/, "");
        const search = window.location.search;

        [...langsLinks].forEach(item => {
            const lang = item.getAttribute("data-lang");
            item.setAttribute("href", lang === "ro" ? pathWithoutLang ? `${pathWithoutLang}${search}` : "/" : `/${lang}${pathWithoutLang}${search}`);

            if (langFromUrl) {
                if (langFromUrl === lang) {
                    item.classList.add("active");
                }
                else {
                    item.classList.remove("active")
                }
            }
        });

    });

    const localeMenu = document.getElementById("locale-menu");

    document.body.addEventListener("click", () => {
        if (localeMenu.classList.contains("show")) {
            localeMenu.classList.remove("show");
        }
    }, true);


    const dropdown = document.getElementById("header-dropdown");
    const nav = document.getElementById("header-static-nav");
    dropdown.addEventListener("click", () => {
        if (!nav.classList.contains("dropdown-show")) {
            nav.classList.add("dropdown-show");
            dropdown.classList.remove("header-dropdown-hamb");
            dropdown.classList.add("header-dropdown-close");
        }
        else {
            nav.classList.remove("dropdown-show");
            dropdown.classList.add("header-dropdown-hamb");
            dropdown.classList.remove("header-dropdown-close");
        }
    });

    const tabs = document.querySelectorAll(".header-entity-nav_tab-WP");

    /*if (!Array.from) {
        Array.from = (function() {
            const toStr = Object.prototype.toString;
            const isCallable = function(fn) {
                return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
            };
            const toInteger = function (value) {
                const number = Number(value);
                if (isNaN(number)) { return 0; }
                if (number === 0 || !isFinite(number)) { return number; }
                return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
            };
            const maxSafeInteger = Math.pow(2, 53) - 1;
            const toLength = function (value) {
                const len = toInteger(value);
                return Math.min(Math.max(len, 0), maxSafeInteger);
            };
            return function from(arrayLike/!*, mapFn, thisArg *!/) {
                const C = this;
                const items = Object(arrayLike);
                if (arrayLike == null) {
                    throw new TypeError('Array.from requires an array-like object - not null or undefined');
                }
                const mapFn = arguments.length > 1 ? arguments[1] : void undefined;
                let T;
                if (typeof mapFn !== 'undefined') {
                    if (!isCallable(mapFn)) {
                        throw new TypeError('Array.from: when provided, the second argument must be a function');
                    }
                    if (arguments.length > 2) {
                        T = arguments[2];
                    }
                }
                const len = toLength(items.length);
                const A = isCallable(C) ? Object(new C(len)) : new Array(len);
                let k = 0;
                let kValue;
                while (k < len) {
                    kValue = items[k];
                    if (mapFn) {
                        A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
                    } else {
                        A[k] = kValue;
                    }
                    k += 1;
                }
                A.length = len;
                return A;
            };
        }());
    }*/
    [...tabs].forEach(tab =>{
        const tabContent = tab.querySelector(".header-entity-nav_tab-content");
        tab.addEventListener("mouseover", ()=>{
            if(!tabContent.classList.contains("show-submenu") || !tab.classList.contains("hovered-tab")) {
                tabContent.classList.add("show-submenu");
                tab.classList.add("hovered-tab")
            }
        })
        tab.addEventListener("mouseout", ()=>{
            if(tabContent.classList.contains("show-submenu") || tab.classList.contains("hovered-tab")){
                tabContent.classList.remove("show-submenu");
                tab.classList.remove("hovered-tab")
            }
        })
    })
});