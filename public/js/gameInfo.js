// Création et récupérations des éléments nécessaires
const textarea = document.createElement("textarea");
textarea.style.display = "none";
const buttonReplace = document.createElement("button");
// Récupération du premier élément avec la classe "commentButton"
const buttonComment = document.querySelector(".commentButton");


// Ajouter l'élément textarea comme enfant de l'élément buttonComment
document.querySelector('.comment-area').appendChild(textarea);

// Ajouter un événement de clic pour le bouton
buttonComment.addEventListener("click", function comment() {
    // Afficher l'élément textarea
    textarea.classList.add("comment-textarea");
    textarea.style.display = "block";
    textarea.classList.toggle("text-areaToggle");
    // Supprimer le bouton
    buttonComment.style.display = "none";

    // Créer un nouveau bouton avec une action différente
    const newButton = document.createElement("button");
    newButton.innerText = "Enregistrer";
    newButton.classList.add("btn");
    newButton.classList.add("w-30");
    newButton.classList.add("mt-3");
    newButton.classList.add("saveButton");

    // Ajouter l'événement de clic pour le bouton enregistrer
    newButton.addEventListener("click", function () {
        // Code a compléter pour enregistrer le commentaire -- PHP
    });

    // Ajouter le nouveau bouton à la place de l'ancien
    document.querySelector('.button-area').appendChild(newButton);

    // Créer un bouton "Supprimer"
    const deleteButton = document.createElement("button");
    deleteButton.innerText = "Annuler";
    deleteButton.classList.add("btn");
    deleteButton.classList.add("w-30");
    deleteButton.classList.add("mt-3");
    deleteButton.classList.add("deleteButton");
    newButton.classList.toggle("buttonToggle");
    // Ajouter l'événement de clic pour le bouton "Supprimer"
    deleteButton.addEventListener("click", function () {
        // Supprimer le text-area et le bouton "Enregistrer"
        textarea.style.display = "none";
        newButton.remove();
        deleteButton.remove();

        buttonComment.style.display = "block";
        buttonComment.addEventListener("click", function () {
            textarea.style.display = "block";
        })
    });
    deleteButton.classList.toggle("buttonToggle");
    // Ajouter le bouton "Supprimer" à la place de l'ancien
    document.querySelector('.button-area').appendChild(deleteButton);


});

