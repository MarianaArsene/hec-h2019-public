// Définir variable paysExpedition
var paysExpedition = "CAN";

// Définir variable paysLivraisonIncluse
var paysLivraisonIncluse = [
    "CAN",
    "USA",
    "BRA"
];

// Définir variable tarifLivraisonNonIncluse
var tarifLivraisonNonIncluse = 14.99;

// Affichage de chacune des variables avec console.log
console.log("Le pays d'expédition est : " + paysExpedition);
console.log("Les pays pour lesquels la livraison est incluses sont : " + paysLivraisonIncluse);
console.log("Le tarif de livraison pour les pays exclus est : " + tarifLivraisonNonIncluse);

// Ajouter un pays au tableau
paysLivraisonIncluse.push("CHN");
console.log("Les pays pour lesquels la livraison est incluses sont : " + paysLivraisonIncluse);