<?php 

// Ne pas toucher à ce bloc de code! 
include('app/database-functions.php');
$line = selectSolde();
$transaction = selectLastTransaction();

// Voici les variables dont vous aurez besoin
$solde = $line->solde;
$montant = $transaction->montant;

// Inclure le formulaire ici


?>