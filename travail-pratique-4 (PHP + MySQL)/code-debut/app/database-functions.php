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

/**
 * Retourne l'ensemble des transactions disponibles dans la base de données.
 */
function selectLastTransaction() {
    global $db;

    $query = $db->query('SELECT * FROM transactions ORDER BY id DESC LIMIT 1');
    return $query->fetch(PDO::FETCH_OBJ);
}

/**
 * Retourne le solde du compte
 */
function selectSolde() {
    global $db;

    $query = $db->query('SELECT SUM(montant) AS solde FROM transactions');
    return $query->fetch(PDO::FETCH_OBJ);
}

/**
 * Ajout d'une transaction
 */
function ajouteTransaction($montant) {
    global $db;
    
    // Prépare et exécute la requête
    $query = "INSERT INTO transactions (montant) VALUES ($montant)";
    $db->exec($query);
}
 
