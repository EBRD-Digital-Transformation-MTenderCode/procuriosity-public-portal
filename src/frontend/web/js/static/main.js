"use strict";document.addEventListener("DOMContentLoaded",function(){var t=tns({container:"#main-carousel",controls:!1,controlsContainer:!1,navContainer:document.getElementById("carousel-indicators"),autoplay:!0,autoplayHoverPause:!0,autoplayButtonOutput:!1,rewind:!0}),e=document.querySelectorAll(".carousel-indicator");window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=function(t,e){e=e||window;for(var n=0;n<this.length;n++)t.call(e,this[n],n,this)}),t.events.on("indexChanged",function(t){e.forEach(function(e,n){t.index===n?e.classList.add("is-active"):e.classList.remove("is-active")})});for(var n=document.querySelector(".main-about__partners_links"),o=n.children.length;o>=0;o--)n.appendChild(n.children[Math.random()*o|0])});
//# sourceMappingURL=main.js.map
