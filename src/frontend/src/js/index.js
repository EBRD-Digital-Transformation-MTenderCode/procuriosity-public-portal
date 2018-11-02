document.addEventListener("DOMContentLoaded", () => {
    const localeToggle = document.getElementById("locale-toggle");
    const localeMenu = document.getElementById("locale-menu");
    const dropdown = document.getElementById("header-dropdown");
    const nav = document.getElementById("header-static-nav");

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

    dropdown.addEventListener("click", () => {
        if (!nav.classList.contains("dropdown-show")) {
            nav.classList.add("dropdown-show");
            dropdown.classList.remove("header-dropdown-hamb");
            dropdown.classList.add("header-dropdown-close");
        }
        else{
            nav.classList.remove("dropdown-show");
            dropdown.classList.add("header-dropdown-hamb");
            dropdown.classList.remove("header-dropdown-close");
        }
    });
});