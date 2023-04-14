/*
    Récupération des éléments du DOM à manipuler
    pour la barre de navigation
*/
const navbar = document.querySelector(".navbar");
const image = document.getElementById('nav-title');

//! Fonction pour animer la navbar lors du défilement
function handleScroll() {
    if (window.pageYOffset > 0) {
        // Apply the scrolled styles when the user has scrolled down
        navbar.classList.add("scrolled");
        image.hidden = true;
    } else {
        // Reset the navbar styles when the user is at the top of the page
        navbar.classList.remove("scrolled");
        navbar.classList.add("navBack");
        image.hidden = false;
        image.classList.remove("navlogoscrolled");
    }
}

window.addEventListener("scroll", handleScroll);
