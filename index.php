<?php
$root = dirname($_SERVER['PHP_SELF']);
require_once "controller/config.php"; // Importing config files
?>

<head>
    <link rel="stylesheet" href="<?php echo $root; ?>/static/styles/style.css">
</head>

<?php
//rooting
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "connexion":
            include "view/connexion.php";
            break;

        case "inscription":
            include "view/inscription.php";
            break;

        case "addgame":
            include "view/addgame.php";
            break;
        case "jeux":
            include "view/jeux.php";
            break;

        default:
            include "view/errorspages/wrongdestination.php";
            break;
    }
} else {
    require DIR . "/view/accueil.php";
}
?>