"use strict";document.addEventListener("DOMContentLoaded",function(){var e=document.getElementById("header-phone"),n=document.getElementById("footer-phone");void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&e&&e.addEventListener("click",function(e){e.preventDefault()}),void 0===window.orientation&&-1===navigator.userAgent.indexOf("IEMobile")&&n&&n.addEventListener("click",function(e){e.preventDefault()});var t=document.getElementById("locale-toggle"),o=document.getElementById("locale-menu"),d=document.getElementById("header-dropdown"),s=document.getElementById("header-static-nav");t.addEventListener("click",function(){o.classList.contains("show")||o.classList.add("show")}),document.body.addEventListener("click",function(){o.classList.contains("show")&&o.classList.remove("show")},!0),d.addEventListener("click",function(){s.classList.contains("dropdown-show")?(s.classList.remove("dropdown-show"),d.classList.add("header-dropdown-hamb"),d.classList.remove("header-dropdown-close")):(s.classList.add("dropdown-show"),d.classList.remove("header-dropdown-hamb"),d.classList.add("header-dropdown-close"))})});
//# sourceMappingURL=index.js.map
