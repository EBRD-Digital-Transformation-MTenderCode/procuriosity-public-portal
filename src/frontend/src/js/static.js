
document.addEventListener("DOMContentLoaded", () => {
    const partnersContainer = document.querySelector(".static-about__links");

     if (partnersContainer) {
         for (let i = partnersContainer.children.length; i >= 0; i--) {
             partnersContainer.appendChild(partnersContainer.children[Math.random() * i | 0]);
         }
     }

    const learnMoreButton = document.getElementById("learnMore");
    const learnMoreBlock = document.getElementById("more");

    if (learnMoreButton && learnMoreBlock) {
        learnMoreButton.addEventListener("click", () => {
            window.scroll({
                behavior: "smooth",
                left: 0,
                top: learnMoreBlock.offsetTop
            });
        })
    }

});

