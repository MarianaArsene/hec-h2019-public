<?php 

/**
 * Retourne toutes les lignes de la table des contacts pour la liste de distribution
 * La variable $contacts contiendra toutes ces lignes
 */
$query = $db->query('SELECT * from exercice_contacts');
$contacts = $query->fetchAll(PDO::FETCH_OBJ);

?>