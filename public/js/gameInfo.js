// Création d'un textarea
const textarea = document.createElement("textarea");
textarea.hidden = true;

// Récupérer le premier élément avec la classe "commentButton"
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

//! Définition d'une fonction pour afficher le textarea et remplacer le bouton commentaire
function showTextarea() {
    // Vérifier si le textarea est déjà visible
    if (!textarea.hidden) return;

    // Afficher le textarea
    textarea.hidden = false;

    // Créer les boutons pour valider ou annuler le commentaire
    const saveButton = createButton("Enregistrer", ["saveButton"], () => {
        // Enregistrer le commentaire
        console.log("Commentaire enregistré");

        // Cacher le textarea et supprimer les boutons
        textarea.hidden = true;
        saveButton.remove();
        deleteButton.remove();

        // Remplacer les boutons par le bouton "Laisser un commentaire"
        const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
        document.querySelector(".button-area").appendChild(buttonReplace);
    });

    const deleteButton = createButton("Annuler", ["deleteButton"], () => {
        // Cacher le textarea et supprimer les boutons
        textarea.hidden = true;
        saveButton.remove();
        deleteButton.remove();

        // Remplacer les boutons par le bouton "Laisser un commentaire"
        const buttonReplace = createButton("Laisser un commentaire", ["commentButton"], showTextarea);
        document.querySelector(".button-area").appendChild(buttonReplace);
    });

    // Ajouter les nouveaux boutons
    document.querySelector('.button-area').appendChild(saveButton);
    document.querySelector('.button-area').appendChild(deleteButton);

    // Retirer le bouton "Laisser un commentaire"
    buttonComment.remove();
}

//* Event Listeners
buttonComment.addEventListener("click", showTextarea);