// // // Création d'un textarea
// // const textarea = document.createElement("textarea");
// // textarea.hidden = true;

// // // Récupérer le premier élément avec la classe "commentButton"
// // const buttonComment = document.querySelector(".commentButton");
// // document.querySelector('.comment-area').appendChild(textarea);

// // //! Définition d'une fonction réutilisable pour créer un bouton
// // function createButton(text, classes, onClick) {
// //     const button = document.createElement("button");
// //     button.innerText = text;
// //     button.classList.add("btn", "w-30", "mt-3", ...classes);
// //     button.addEventListener("click", onClick);
// //     return button;
// // }

// // //! Définition d'une fonction pour afficher le textarea et remplacer le bouton commentaire
// // function showTextarea() {
// //     // Vérifier si le textarea est déjà visible
// //     if (!textarea.hidden) return;

// //     // Afficher le textarea
// //     textarea.hidden = false;

// //     // Créer les boutons pour valider ou annuler le commentaire
// //     const saveButton = createButton("Enregistrer", ["saveButton"], () => {
// //         // Enregistrer le commentaire
// //         console.log("Commentaire enregistré");

// //         // Cacher le textarea et supprimer les boutons
// //         textarea.hidden = true;
// //         saveButton.remove();
// //         deleteButton.remove();

// //         // Remplacer les boutons par le bouton "Laisser un commentaire"
// //         const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
// //         document.querySelector(".button-area").appendChild(buttonReplace);
// //     });

// //     const deleteButton = createButton("Annuler", ["deleteButton"], () => {
// //         // Cacher le textarea et supprimer les boutons
// //         textarea.hidden = true;
// //         saveButton.remove();
// //         deleteButton.remove();

// //         // Remplacer les boutons par le bouton "Laisser un commentaire"
// //         const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
// //         document.querySelector(".button-area").appendChild(buttonReplace);
// //     });

// //     // Ajouter les nouveaux boutons
// //     document.querySelector('.button-area').appendChild(saveButton);
// //     document.querySelector('.button-area').appendChild(deleteButton);

// //     // Retirer le bouton "Laisser un commentaire"
// //     buttonComment.remove();
// // }

// //* Event Listeners
// // buttonComment.addEventListener("click", showTextarea);







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
    buttonComment.style.display = "none";

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

        buttonComment.style.display = "block";
        buttonComment.addEventListener("click", function () {
            textarea.style.display = "block";
        })
    });
    deleteButton.classList.toggle("buttonToggle");
    // Ajouter le bouton "Supprimer" à la place de l'ancien
    document.querySelector('.button-area').appendChild(deleteButton);


});

