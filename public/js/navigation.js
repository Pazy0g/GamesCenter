window.addEventListener("scroll", function () {

    /*
    Récupération des éléments du DOM à manipuler
    pour la barre de navigation
    */
    let navbar = document.querySelector(".navbar");
    let image = document.getElementById('navLogo');


    /*
    Ajout d'un timeout afin de rentre l'animation plus smooth
    */

    if (window.pageYOffset > 0) { // Vérifie si l'utilisateur a scrollé vers le bas

        navbar.classList.add("scrolled"); // Ajoute la classe "scrolled" à la navbar
        image.classList.add("navlogoscrolled");


    } else {
        /*
         Remet le nav à son état d'origine lorsque l'utilisateur 
         reviens tout en haut de la page
       */
        navbar.classList.remove("scrolled"); // Supprime la classe "scrolled" de la navbar
        navbar.classList.add("navBack");

        image.classList.remove("navlogoscrolled");
    }
    // 100ms avant le début de l'animation


});