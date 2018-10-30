document.addEventListener("DOMContentLoaded", () => {
    const partnersContainer = document.querySelector(".about__partners_links");

     if (partnersContainer) {
         for (let i = partnersContainer.children.length; i >= 0; i--) {
             partnersContainer.appendChild(partnersContainer.children[Math.random() * i | 0]);
         }
     }

});