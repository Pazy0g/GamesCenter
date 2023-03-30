<?php
// Déclaration de la classe Dbh

namespace Dbh\database;

use PDO;
use PDOException;

class Dbh
{

  // Propriété statique pour stocker l'instance unique de la classe
  private static $instance = null;

  // Établit la connexion à la base de données et retourne l'instance PDO
  public static function connectDB()
  {

    $host = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_NAME'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];


    // Vérifie si une instance de connexion existe déjà

    if (isset(self::$instance)) {
      // Si oui, retourne l'instance existante

      return self::$instance;
    } else {
      // Sinon, crée une nouvelle instance de connexion


      try {
        // Construit la chaîne de connexion pour PDO
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
        // Crée une nouvelle instance de PDO avec les paramètres de connexion
        self::$instance = new PDO($dsn, $user, $password);
        // Configure PDO pour générer des exceptions en cas d'erreur
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        // Retourne la nouvelle instance de connexion

        return self::$instance;
      } catch (PDOException $e) {

        // Si une erreur se produit pendant la connexion, affiche un message d'erreur et arrête le script
        die("Erreur DB : " . $e->getMessage());
      }
    }
  }
}
