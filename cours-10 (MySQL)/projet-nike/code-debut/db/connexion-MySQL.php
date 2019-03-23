<?php

/**
 * Initialisation de la connexion à la base de données.
 * Changer 'danielparpal' pour votre nom d'utilisateur.
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=c9', 'danielparpal');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$db->exec("set names utf8");

?>