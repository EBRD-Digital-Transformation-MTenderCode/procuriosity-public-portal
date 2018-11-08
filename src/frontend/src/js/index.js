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

    const localeToggle = document.getElementById("locale-toggle");
    const langsLinks = document.querySelectorAll('.locale-dropdown-menu .locale-lang');

    localeToggle.addEventListener("click", () => {
        if (!localeMenu.classList.contains("show")) {
            localeMenu.classList.add("show");
        }
        const pathWithoutLang = window.location.pathname.replace(/\/ru|\/en/, "");

        langsLinks.forEach(item => {
            const lang = item.getAttribute("data-lang");

            item.setAttribute("href", lang === "ro" ? `${pathWithoutLang}` : `/${lang}${pathWithoutLang}`);
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
});