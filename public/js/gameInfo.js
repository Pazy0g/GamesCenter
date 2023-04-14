// Creation d'un textarea
const textarea = document.createElement("textarea");
textarea.hidden = true;

// Récuperer le première élément avec la classe "commentButton"
const buttonComment = document.querySelector(".commentButton");
document.querySelector('.comment-area').appendChild(textarea);

//! Définition d'une fonction réutilisable pour créer un bouton
function createButton(text, classes, onClick) {
    const button = document.createElement("button");
    button.innerText = text;
    button.classList.add("btn", "w-30", "mt-3", ...classes);
    button.addEventListener("click", onClick);
    return button;
}

//! Définition une fonction pour afficher le textarea et remplacer le bouton commentaire
function showTextarea() {
    // Afficher le text area
    textarea.hidden = false;

    // Remplacement du bouton commentaire par deux nouveaux boutons
    const saveButton = createButton("Enregistrer", ["saveButton"], () => { });
    const deleteButton = createButton("Annuler", ["deleteButton"], () => {
        // Cacher le text area et supprimer les boutons
        textarea.hidden = true;
        saveButton.remove();
        deleteButton.remove();


        const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
        document.querySelector(".button-area").appendChild(buttonReplace);
    });

    // Ajouter le nouveau bouton
    document.querySelector('.button-area').appendChild(saveButton);
    document.querySelector('.button-area').appendChild(deleteButton);

    // Retirer le bouton par défaut
    buttonComment.remove();
}

//* Event Listeners
buttonComment.addEventListener("click", showTextarea);


const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
buttonReplace.addEventListener("click", showTextarea);
document.querySelector('.button-area').appendChild(buttonReplace);