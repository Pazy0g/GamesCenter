// Créez un élément textarea et cachez-le
const textarea = document.createElement("textarea");
textarea.style.display = "none";
const buttonReplace = document.createElement("button");
// Récupérez le premier élément avec la classe "commentButton"
const buttonComment = document.querySelector(".commentButton");



// Ajoutez l'élément textarea comme enfant de l'élément buttonComment
document.querySelector('.comment-area').appendChild(textarea);

// Ajoutez un événement de clic pour le bouton
buttonComment.addEventListener("click", function comment() {
    // Afficher l'élément textarea
    textarea.classList.add("comment-textarea");
    textarea.style.display = "block";
    textarea.classList.toggle("text-areaToggle");
    // Supprimer le bouton
    buttonComment.remove();
    buttonReplace.remove();

    // Créer un nouveau bouton avec une action différente
    const newButton = document.createElement("button");
    newButton.innerText = "Enregistrer";
    newButton.classList.add("btn");
    newButton.classList.add("w-30");
    newButton.classList.add("mt-3");
    newButton.classList.add("saveButton");

    // Ajouter l'événement de clic pour le nouveau bouton
    newButton.addEventListener("click", function () {
        // Ajouter le code pour enregistrer le commentaire
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
        textarea.value = "";
        buttonReplace.innerText = "Laisser un commentaire";
        buttonReplace.classList.add("btn");
        buttonReplace.classList.add("w-100");
        buttonReplace.classList.add("mt-3");
        buttonReplace.classList.add("commentButton");
        document.querySelector(".button-area").appendChild(buttonReplace);

    });
    deleteButton.classList.toggle("buttonToggle");
    // Ajouter le bouton "Supprimer" à la place de l'ancien
    document.querySelector('.button-area').appendChild(deleteButton);



});


buttonReplace.addEventListener('click', function () {
    // Afficher l'élément textarea
    textarea.classList.add("comment-textarea");
    textarea.style.display = "block";
    textarea.classList.toggle("text-areaToggle");
    // Supprimer le bouton
    buttonComment.remove();
    buttonReplace.remove();

    // Créer un nouveau bouton avec une action différente
    const newButton = document.createElement("button");
    newButton.innerText = "Enregistrer";
    newButton.classList.add("btn");
    newButton.classList.add("w-30");
    newButton.classList.add("mt-3");
    newButton.classList.add("saveButton");

    // Ajouter l'événement de clic pour le nouveau bouton
    newButton.addEventListener("click", function () {
        // Ajouter le code pour enregistrer le commentaire
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
        textarea.value = "";

        buttonReplace.innerText = "Laisser un commentaire";
        buttonReplace.classList.add("btn");
        buttonReplace.classList.add("w-100");
        buttonReplace.classList.add("mt-3");
        buttonReplace.classList.add("commentButton");
        document.querySelector(".button-area").appendChild(buttonReplace);

    });
    deleteButton.classList.toggle("buttonToggle");
    // Ajouter le bouton "Supprimer" à la place de l'ancien
    document.querySelector('.button-area').appendChild(deleteButton);
});