// Variables
let pseudo = document.getElementById('SignupInputUid');
let email = document.getElementById("SignupInputEmail");
let password = document.getElementById("SignupInputPwd");
let button = document.getElementById("SignupSubmit");
let rgpd = document.getElementById("rgpd");


function SignupChecker() {
    // Variables nécessaire pour les conditions
    let div = document.getElementById("formdiv-signup");

    /*
    Condition qui vérifie si la valeur de "pseudo" est supérieur ou égal
    à 5 si c'est le cas alors
    les messages d'informations créer précédemment sont supprimer
    */
    if (pseudo.value.length >= 5) {
        let previousResponse = div.querySelectorAll(".response"); // Trouve tous les éléments créés avec la classe "response"
        for (let i = 0; i < previousResponse.length; i++) { // Boucle sur la liste des éléments
            div.removeChild(previousResponse[i]); // Supprime chacun des éléments trouvés
        }
    }

    /*
    Cette condiction vérifie si la longueur de la valeur du pseudo est 
    plus petite que 0 et plus petit que 5 si c'est le cas
    alors un message d'information s'affiche
    */
    if (pseudo.value.length > 0 && pseudo.value.length < 5) {
        let response = document.createElement("p");
        response.textContent = "Vous devez renseigner un pseudo de plus de 5 caractères";
        response.style.fontSize = "12px";
        response.style.fontWeight = "bold";
        response.style.color = "red";
        response.style.marginLeft = "15px";
        let previousResponse = div.querySelector(".response"); // Trouve le dernier élément créé avec la classe "response"
        if (previousResponse) {
            div.removeChild(previousResponse); // Supprime l'élément précédent s'il existe
        }
        // Ajoute une classe pour faciliter la recherche ultérieure
        response.classList.add("response");
        div.appendChild(response);
    }


    const EmailValidator = [

        "[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"

    ]


    //! Problème à régler ( le bouton s'active uniquement si j'écris le mdp après avoir cocher la RGPD ) à voir rapidement

    // Vérifiez toutes les conditions pour activer le bouton
    if (pseudo.value.length > 0 && EmailValidator && rgpd.checked && password.value.length >= 8) {
        button.disabled = false; // Active le bouton

    } else {
        button.disabled = true; // Désactive le bouton
    }
}



pseudo.addEventListener('input', SignupChecker);
email.addEventListener('input', SignupChecker);
password.addEventListener('input', SignupChecker);

SignupChecker();