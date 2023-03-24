// Variables
let pseudo = document.getElementById('SignupInputUid');
let email = document.getElementById("SignupInputEmail");
let password = document.getElementById("SignupInputPwd");
let button = document.getElementById("SignupSubmit");



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


    /*
     Condition similaire à celle du pseudo pour le mot de passe
    */

    let pwdDiv = document.getElementById("respPwd");

    // Vérifier s'il y a déjà une réponse et la supprimer
    let previousPwdResponse = pwdDiv.querySelector(".pwdResponse");
    if (previousPwdResponse) {
        pwdDiv.removeChild(previousPwdResponse);
    }

    // Condition pour vérifier la longueur du mot de passe et afficher une réponse en conséquence
    if (password.value.length > 0 && password.value.length <= 8) {
        let pwdResponse = document.createElement("p");
        pwdResponse.textContent = "Votre mot de passe doit faire au moins 8 caractères";
        pwdResponse.style.fontSize = "12px";
        pwdResponse.style.fontWeight = "bold";
        pwdResponse.style.color = "red";
        pwdResponse.style.marginLeft = "15px";

        // Ajouter une classe pour faciliter la recherche ultérieure
        pwdResponse.classList.add("pwdResponse");
        pwdDiv.appendChild(pwdResponse);
    }


    /*
    Conditions de vérification du reste du formulaire
    avec regEX pour l'email
    ainsi q'une condition qui vérifie si la case RGPD est cochée
    */

    const rgpdCheckbox = document.getElementById("rgpd");
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    rgpdCheckbox.style.color = "red";

    document.getElementById("RGPDLABEL").style.opacity = "1";
    if (rgpdCheckbox.checked) {
        document.getElementById("RGPDLABEL").style.opacity = "0.6";
    }

    rgpdCheckbox.addEventListener('click', SignupChecker);
    if (rgpdCheckbox.checked && pseudo.value.length > 0 && emailRegex.test(email.value) && password.value.length >= 8) {

        button.disabled = false; // Active le bouton
    } else {
        button.disabled = true; // Désactive le bouton
    }
}


pseudo.addEventListener('input', SignupChecker);
email.addEventListener('input', SignupChecker);
password.addEventListener('input', SignupChecker);


SignupChecker();