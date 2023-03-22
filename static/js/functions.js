let pseudo = document.getElementById('inputUid');
let password = document.getElementById('inputPwd');
let button = document.getElementById("loginSubmit");

// Fonction pour mettre à jour l'état du bouton
function updateButtonState() {
    if (pseudo.value && password.value) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }

}





// Écouteurs d'évènement sur les champs
pseudo.addEventListener('input', updateButtonState);
password.addEventListener('input', updateButtonState);

// Initialise l'état du bouton
updateButtonState();