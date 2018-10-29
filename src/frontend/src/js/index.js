const localeToggle = document.getElementById("locale-toggle");
const localeMenu = document.getElementById("locale-menu");

localeToggle.addEventListener("click", () => {
    if (!localeMenu.classList.contains("visible")) {
        localeMenu.classList.add("visible");
    }
});

document.body.addEventListener("click", () => {
    if (localeMenu.classList.contains("visible")) {
        localeMenu.classList.remove("visible");
    }
}, true);