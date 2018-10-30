document.addEventListener("DOMContentLoaded", () => {
    const localeToggle = document.getElementById("locale-toggle");
    const localeMenu = document.getElementById("locale-menu");

    localeToggle.addEventListener("click", () => {
        if (!localeMenu.classList.contains("show")) {
            localeMenu.classList.add("show");
        }
    });

    document.body.addEventListener("click", () => {
        if (localeMenu.classList.contains("show")) {
            localeMenu.classList.remove("show");
        }
    }, true);
});