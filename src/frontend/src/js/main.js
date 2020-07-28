document.addEventListener("DOMContentLoaded", () => {
    const mainCarousel = tns({
        container: "#main-carousel",
        controls: false,
        controlsContainer: false,
        navContainer: document.getElementById("carousel-indicators"),
        autoplay: true,
        autoplayHoverPause: true,
        autoplayButtonOutput: false,
        rewind: true
    });

    const carouselIndicators = document.querySelectorAll(".carousel-indicator");

    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = function (callback, thisArg) {
            thisArg = thisArg || window;
            for (var i = 0; i < this.length; i++) {
                callback.call(thisArg, this[i], i, this);
            }
        };
    }

    mainCarousel.events.on("indexChanged", event => {
        carouselIndicators.forEach((indicator, index) => {
            event.index === index ? indicator.classList.add("is-active") : indicator.classList.remove("is-active");
        });
    });

    const partnersContainer = document.querySelector(".main-about__partners_links");

    for (let i = partnersContainer.children.length; i >= 0; i--) {
        partnersContainer.appendChild(partnersContainer.children[Math.random() * i | 0]);
    }
});