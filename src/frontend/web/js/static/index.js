"use strict";document.addEventListener("DOMContentLoaded",function(){var e=document.getElementById("header-phone"),t=document.getElementById("footer-phone");void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&e&&e.addEventListener("click",function(e){e.preventDefault()}),void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&t&&t.addEventListener("click",function(e){e.preventDefault()});var n,o=document.querySelector("html");/\/en|\/ru/.test(window.location)&&(n=window.location.pathname.match(/\/en|\/ru/)[0].replace(/\//g,""),o.setAttribute("lang",n||"ro"));var a=document.getElementById("locale-toggle"),s=document.querySelectorAll(".locale-dropdown-menu .locale-lang");a.addEventListener("click",function(){d.classList.contains("show")||d.classList.add("show");var e=window.location.pathname.replace(/\/ru|\/en/,"");s.forEach(function(t){var o=t.getAttribute("data-lang");t.setAttribute("href","ro"===o?e||"/":"/".concat(o).concat(e)),n&&(n===o?t.classList.add("active"):t.classList.remove("active"))})});var d=document.getElementById("locale-menu");document.body.addEventListener("click",function(){d.classList.contains("show")&&d.classList.remove("show")},!0);var c=document.getElementById("header-dropdown"),r=document.getElementById("header-static-nav");c.addEventListener("click",function(){r.classList.contains("dropdown-show")?(r.classList.remove("dropdown-show"),c.classList.add("header-dropdown-hamb"),c.classList.remove("header-dropdown-close")):(r.classList.add("dropdown-show"),c.classList.remove("header-dropdown-hamb"),c.classList.add("header-dropdown-close"))});var i=document.querySelectorAll(".header-entity-nav_tab-WP");Array.from(i).forEach(function(e){var t=e.querySelector(".header-entity-nav_tab-content");e.addEventListener("mouseover",function(){t.classList.contains("show-submenu")&&e.classList.contains("hovered-tab")||(t.classList.add("show-submenu"),e.classList.add("hovered-tab"))}),e.addEventListener("mouseout",function(){(t.classList.contains("show-submenu")||e.classList.contains("hovered-tab"))&&(t.classList.remove("show-submenu"),e.classList.remove("hovered-tab"))})})});
//# sourceMappingURL=index.js.map
