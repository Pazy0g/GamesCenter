<?php

//routage
if (isset($_GET["action"])) {
  switch (["action"]) {
    case "connexion":
        include "view/connexion.php";
    break;

    case "inscription":
        include 






}
}else {
    require DIR . "/view/accueil.php";
}


