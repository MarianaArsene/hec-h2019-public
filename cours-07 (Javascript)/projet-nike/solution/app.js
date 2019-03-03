// Variable permettant de garder en mémoire le prix des items ajoutés
var items = [];

// Prix unitaire des items (à utiliser pour le calcul du prix total)
var prixUnitaire = 235;

// Cette ligne de code ajoute un "Gestionnaire d'événement en JavaScript"
// Nous verrons une approche plus simple avec jQuery au cours 8
document.getElementById('addProductButton').addEventListener('click', function(e) {
    // Nous voulons éviter le rafraîchissement de la page après le clic du bouton
    e.preventDefault();
    
    // Preuve que le bouton a été cliqué
    console.log("Le bouton a été cliqué!");
    
    // Ajout d'un nouvel élément au tableau des items. 
    // Cet élément est le prix unitaire (utilisez la variable définie ci-dessus).
    items.push(prixUnitaire);
    
    // On affiche le contenu du tableau dans la console, avec la méthode .toString()
    // Assurez-vous de mettre en contexte votre affichage (ex. Le tableau des items est: 235,235,235)
    console.log("Le tableau des items contient ces valeurs: " + items.toString());
    
    // On affiche la quantité d'items grâce à la propriété .length
    // Assurez-vous de mettre cette valeur en contexte (ex. Il y a 3 items dans le tableau.)
    console.log("Vous avez " + items.length + " items dans votre panier.");
    
    // On affiche le prix total dans la console (quantité d'items multipliée par le prix unitaire).
    // Assurez-vous de mettre cette valeur en contexte (ex. Le prix total est : 235$.
    console.log("Le prix total est: " + items.length * prixUnitaire + "$.");
    
    // Si le prix total dépasse 1000, on affiche dans la console : "Facture supérieure à 1000$"
    // Sinon, on affiche dans la console : "Facture inférieure ou égale à 1000$"
    if (items.length * prixUnitaire > 1000) {
        console.log("La facture est supérieure à 1000$.");
    } else {
        console.log("La facture est inférieure ou égale à 1000$");
    }
    
});