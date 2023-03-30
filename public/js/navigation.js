window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".navbar"); // Sélectionne l'élément HTML avec la classe "navbar"

    if (window.pageYOffset > 0) { // Vérifie si l'utilisateur a scrollé vers le bas
        navbar.classList.add("scrolled"); // Ajoute la classe "scrolled" à la navbar
    } else {
        navbar.classList.remove("scrolled"); // Supprime la classe "scrolled" de la navbar
        navbar.classList.add("navBack");
    }
});