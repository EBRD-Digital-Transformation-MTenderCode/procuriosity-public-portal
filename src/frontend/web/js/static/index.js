"use strict";function _toConsumableArray(e){return _arrayWithoutHoles(e)||_iterableToArray(e)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}function _arrayWithoutHoles(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}document.addEventListener("DOMContentLoaded",function(){var e=document.getElementById("header-phone"),t=document.getElementById("footer-phone");void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&e&&e.addEventListener("click",function(e){e.preventDefault()}),void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&t&&t.addEventListener("click",function(e){e.preventDefault()});var n,o=document.querySelector("html");/\/en|\/ru/.test(window.location)&&(n=window.location.pathname.match(/\/en|\/ru/)[0].replace(/\//g,""),o.setAttribute("lang",n||"ro"));var a=document.getElementById("locale-toggle"),r=document.querySelectorAll(".locale-dropdown-menu .locale-lang");a.addEventListener("click",function(){s.classList.contains("show")||s.classList.add("show");var e=window.location.pathname.replace(/\/ru|\/en/,"");_toConsumableArray(r).forEach(function(t){var o=t.getAttribute("data-lang");t.setAttribute("href","ro"===o?e||"/":"/".concat(o).concat(e)),n&&(n===o?t.classList.add("active"):t.classList.remove("active"))})});var s=document.getElementById("locale-menu");document.body.addEventListener("click",function(){s.classList.contains("show")&&s.classList.remove("show")},!0);var i=document.getElementById("header-dropdown"),c=document.getElementById("header-static-nav");i.addEventListener("click",function(){c.classList.contains("dropdown-show")?(c.classList.remove("dropdown-show"),i.classList.add("header-dropdown-hamb"),i.classList.remove("header-dropdown-close")):(c.classList.add("dropdown-show"),i.classList.remove("header-dropdown-hamb"),i.classList.add("header-dropdown-close"))}),_toConsumableArray(document.querySelectorAll(".header-entity-nav_tab-WP")).forEach(function(e){var t=e.querySelector(".header-entity-nav_tab-content");e.addEventListener("mouseover",function(){t.classList.contains("show-submenu")&&e.classList.contains("hovered-tab")||(t.classList.add("show-submenu"),e.classList.add("hovered-tab"))}),e.addEventListener("mouseout",function(){(t.classList.contains("show-submenu")||e.classList.contains("hovered-tab"))&&(t.classList.remove("show-submenu"),e.classList.remove("hovered-tab"))})})});
//# sourceMappingURL=index.js.map
