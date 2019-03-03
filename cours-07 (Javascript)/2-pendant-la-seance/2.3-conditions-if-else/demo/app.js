var clientMembreAmazonPrime = true;
var montant = 60;

// SI le client est Amazon Prime
if  (clientMembreAmazonPrime) {
    console.log("Le client est membre");
// SINON
} else {
    console.log("Le client n'est pas membre");
}



if (montant > 100) {
    montant = montant * 0.9;
    console.log("Le montant apres rabais est: " + montant);
} else {
    console.log("Vous n'avez pas de rabais");
}