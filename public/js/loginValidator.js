let pseudo = document.getElementById('inputUid');
let password = document.getElementById('inputPwd');
let button = document.getElementById("loginSubmit");

// Fonction pour mettre à jour l'état du bouton
function LoginChecker() {
    if (pseudo.value.length >= 5 && password.value.length >= 8) {
        // si toutes ces conditions sont réunies le bouton s'active
        button.disabled = false;
    } else {
        // sinon il se désactive
        button.disabled = true;
    }
}

// Écouteurs d'évènement sur les champs
pseudo.addEventListener('input', LoginChecker);
password.addEventListener('input', LoginChecker);

// Initialise l'état du bouton
LoginChecker();