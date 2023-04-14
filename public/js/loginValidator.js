const [pseudo, password, button] = [
    document.querySelector('#inputUid'),
    document.querySelector('#inputPwd'),
    document.querySelector('#loginSubmit')
];
// Fonction pour mettre à jour l'état du bouton
function LoginChecker() {
    button.disabled = (pseudo.value.length < 5 || password.value.length < 8) ? true : false;
}

// Écouteurs d'évènement sur les champs
pseudo.addEventListener('input', LoginChecker);
password.addEventListener('input', LoginChecker);

// Initialise l'état du bouton
LoginChecker();