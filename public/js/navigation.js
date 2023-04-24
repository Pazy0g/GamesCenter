/*
    Récupération des éléments du DOM à manipuler
    pour la barre de navigation
*/
const navbar = document.querySelector(".navbar");
const image = document.getElementById('nav-title');

//! Fonction pour animer la navbar lors du défilement
function handleScroll() {
    if (window.pageYOffset > 0) {
        // Ajoute le style scrolled à la navbar lors du défilement
        navbar.classList.add("scrolled");
        image.hidden = true;
    } else {
        // Retire le style scrolled à la navbar si l'utilisateur est remonté en haut de la page
        navbar.classList.remove("scrolled");
        navbar.classList.add("navBack");
        image.hidden = false;
        image.classList.remove("navlogoscrolled");
    }
}

window.addEventListener("scroll", handleScroll);
