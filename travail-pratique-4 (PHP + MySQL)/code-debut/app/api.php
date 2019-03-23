<?php 

include('database-functions.php');

// Processus pour une transaction
if (!empty($_POST['transaction'])) {
    $montant = $_POST['montant'];
    $montant = floatval($montant);
    
    $line = selectSolde();
    $solde = floatval($line->solde);
    $solde = round($solde, 2);
    
    if ($montant <= $solde) {
        ajouteTransaction($montant * -1);
    } else {
        ajouteTransaction($solde * -1);
    }
}

// Processus pour une recharge
if (!empty($_POST['recharge'])) {
    $montant = $_POST['recharge'];
    ajouteTransaction($montant);
}

// On revient vers la page principale
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>