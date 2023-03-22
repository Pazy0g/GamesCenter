<?php
// Set the $root variable to the directory name of the current PHP file
$root = dirname($_SERVER['PHP_SELF']);
// Include configuration file
require_once "controller/config.php";
?>

<head>
    <!-- Link to the stylesheet using PHP to insert the root path variable -->
    <link rel="stylesheet" href="<?php echo $root; ?>/static/styles/style.css">
</head>

<?php
//! ----------------------------- ROOTERS ----------------------------------------------------

// Check if an action is set in the $_GET array
if (isset($_GET["action"])) {
    // Use a switch statement to determine which page to include based on the value of $_GET["action"]
    switch ($_GET["action"]) {
        case "connexion":
            $title = "GamesCenter - Connexion";
            include "view/connexion.php";
            break;

        case "inscription":
            $title = "GamesCenter - Inscription";
            include "view/inscription.php";
            break;

        case "addgame":
            $title = "GamesCenter - Ajouter un jeu";
            include "view/addgame.php";
            break;

        case "jeux":
            $title = "GamesCenter - Les jeux";
            include "view/jeux.php";
            break;

        case "Apropos":
            $title = "GamesCenter - A propos";
            include "view/Apropos.php";
            break;

        default:
            // If none of the cases match, include an error page that explains the user went to the wrong destination
            $title = "OOPS!";
            include "view/errorspages/wrongdestination.php";
            break;
    }
} else {
    // If no action is set in the $_GET array, show the home page. 
    $title = "GamesCenter - Accueil";
    require DIR . "/view/accueil.php";
}
?>