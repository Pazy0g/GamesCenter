<?php
// Définition de la classe LoginContr qui étend la classe Login

namespace games\model;

use games\model\login;

class LoginContr extends Login
{
    // Définition des propriétés privées $uid et $pwd
    private $uid;
    private $pwd;

    // Définition du constructeur de la classe qui prend en paramètre $uid et $pwd
    public function __construct($uid, $pwd)
    {
        // Initialisation des propriétés $uid et $pwd avec les valeurs des paramètres
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    // Définition de la méthode publique loginUser()
    public function loginUser()
    {
        // Vérification si les champs du formulaire sont vides
        if ($this->emptyInput() == false) {
            // Redirection vers la page d'accueil avec le paramètre "error" défini sur "emptyinput"
            header("Location: ../../index.php?error=emptyinput");
            // Arrête l'exécution du script
            exit();
        }
        // Appel de la méthode getUser() de la classe Login avec les propriétés $uid et $pwd
        $this->getUser($this->uid, $this->pwd);
    }

    // Définition de la méthode privée emptyInput()
    private function emptyInput()
    {
        // Vérification si les propriétés $uid et $pwd sont vides
        if (
            empty($this->uid)
            ||
            empty($this->pwd)
        ) {
            // La méthode renvoie false si les propriétés $uid ou $pwd sont vides
            $result = false;
        } else {
            // La méthode renvoie true si les propriétés $uid et $pwd ne sont pas vides
            $result = true;
        }
        return $result;
    }
}
