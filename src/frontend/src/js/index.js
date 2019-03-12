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

    if ((/\/en|\/ru/).test(window.location)) {
        langFromUrl = window.location.pathname.match(/\/en|\/ru/)[0].replace(/\//g, "");
        html.setAttribute("lang", langFromUrl ? langFromUrl : "ro");
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
            item.setAttribute("href", lang === "ro" ? pathWithoutLang ? pathWithoutLang : "/" : `/${lang}${pathWithoutLang}`);

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

    Array.from(tabs).forEach(tab =>{
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