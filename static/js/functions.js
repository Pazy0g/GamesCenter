let pseudo = document.getElementById('inputUid');
let password = document.getElementById('inputPwd');
let button = document.getElementById("loginSubmit");

// Fonction pour mettre à jour l'état du bouton
function LoginChecker() {
    if (pseudo.value && password.value) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}

// Écouteurs d'évènement sur les champs
pseudo.addEventListener('input', LoginChecker);
password.addEventListener('input', LoginChecker);

// Initialise l'état du bouton
LoginChecker();