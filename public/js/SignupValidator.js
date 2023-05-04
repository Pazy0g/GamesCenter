// Récupération des éléments du formulaire d'inscription
const pseudo = document.getElementById('SignupInputUid');
const email = document.getElementById("SignupInputEmail");
const password = document.getElementById("SignupInputPwd");
const button = document.getElementById("SignupSubmit");



function SignupChecker() {
    // Récupération de la div pour y ajouter "response"
    let div = document.getElementById("formdiv-signup");

    /* 
   ! Condition qui vérifie si la valeur de "pseudo" est supérieur ou égal
   ! à 5 si c'est le cas alors
   ! les messages d'informations créer précédemment sont supprimer
    */

    if (pseudo.value.length >= 5) {
        let previousResponse = div.querySelectorAll(".response"); // Trouve tous les éléments créés avec la classe "response"
        for (let i = 0; i < previousResponse.length; i++) { // Boucle sur la liste des éléments
            div.removeChild(previousResponse[i]); // Supprime chacun des éléments trouvés

        }
    }

    /*
   ! Cette condition vérifie si la longueur de la valeur du pseudo est 
   ! plus grand que 0 et plus petit que 5 si c'est le cas
   ! alors un message d'information s'affiche
    */

    if (pseudo.value.length > 0 && pseudo.value.length < 5) {
        let response = document.createElement("p");

        response.textContent = "Votre pseudo doit contenir au moins 5 caractères";
        response.style.fontSize = "12px";
        response.style.fontWeight = "bold";
        response.style.color = "red";
        response.classList.add("blockresponse");
        pseudo.classList.add("errorinput");
        pseudo.style.outline = "2px solid red";

        let previousResponse = div.querySelector(".response"); // Trouve le dernier élément créé avec la classe "response"
        if (previousResponse) {
            div.removeChild(previousResponse); // Supprime l'élément précédent s'il existe
            response.classList.remove('blockreponse');
            pseudo.classList.remove("errorinput");
            pseudo.classList.remove("SignupInputUid:focus");

        }
        // Ajoute une classe pour faciliter la recherche ultérieure
        response.classList.add("response");
        div.appendChild(response);
    } else {
        pseudo.style.outline = "";
    }


    /*
   !  Condition similaire à celle du pseudo pour le mot de passe
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
        pwdResponse.textContent = "Votre mot de passe doit contenir au moins 8 caractères";
        pwdResponse.style.fontSize = "12px";
        pwdResponse.style.fontWeight = "bold";
        pwdResponse.style.color = "red";
        pwdResponse.classList.add("blockresponse");
        password.style.outline = "2px solid red";
        // Ajouter une classe pour faciliter la recherche ultérieure
        pwdResponse.classList.add("pwdResponse");
        pwdDiv.appendChild(pwdResponse);
    } else {
        password.style.outline = "";
    }


    /*
   ! Conditions de vérification du reste du formulaire
   ! avec regEX pour l'email
   ! ainsi q'une condition qui vérifie si la case RGPD est cochée
    */

    // Récupération de la checkbox RGPD
    const rgpdCheckbox = document.getElementById("rgpd");

    //Regex pour vérifier l'email
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


    // Modification du label de la checkbox

    if (rgpdCheckbox.checked) {                 // Change l'opacité de la checkbox lors de sa validation
        document.getElementById("RGPDLABEL").style.opacity = "0.6";
    } else {
        document.getElementById("RGPDLABEL").style.opacity = "1";
    }


    rgpdCheckbox.addEventListener('click', SignupChecker);
    if (rgpdCheckbox.checked && pseudo.value.length > 0 && emailRegex.test(email.value) && password.value.length >= 8) {

        button.disabled = false; // Active le bouton
    } else {
        button.disabled = true; // Désactive le bouton
    }
}

// Appeler la fonction SignupChecker() lors de la saisie des champs du formulaire
pseudo.addEventListener('input', SignupChecker);
email.addEventListener('input', SignupChecker);
password.addEventListener('input', SignupChecker);


SignupChecker();