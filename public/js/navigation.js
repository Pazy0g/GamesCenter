window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".navbar"); // Sélectionne l'élément HTML avec la classe "navbar"
    let image = document.getElementById('navLogo');

    if (window.pageYOffset > 0) { // Vérifie si l'utilisateur a scrollé vers le bas
        navbar.classList.add("scrolled"); // Ajoute la classe "scrolled" à la navbar
        image.classList.add("navlogoscrolled");
    } else {
        navbar.classList.remove("scrolled"); // Supprime la classe "scrolled" de la navbar
        navbar.classList.add("navBack");

        image.classList.remove("navlogoscrolled");
    }
});