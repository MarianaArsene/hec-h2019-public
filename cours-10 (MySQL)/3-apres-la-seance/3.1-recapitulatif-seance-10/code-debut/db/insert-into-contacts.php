<?php 

// Variables utilisées dans la requête SQL d'insertion
$prenom = 'David';
$courriel = 'david@test.ca'; 

// Ajoute une ligne à la table des contacts (liste distribution)
$prenom = $db->quote($prenom);
$courriel = $db->quote($courriel);
$query = "INSERT INTO exercice_contacts (prenom, courriel) VALUES ($prenom, $courriel)";
$db->exec($query);

?>