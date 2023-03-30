<?php
// Démarre une session PHP
session_start();

// Supprime toutes les variables de session actuelles
session_unset();

// Détruit toutes les données de session existantes
session_destroy();

// Redirection vers la page d'accueil avec le paramètre "error" défini sur "none"
header("Location: ../../index.php?error=none");
