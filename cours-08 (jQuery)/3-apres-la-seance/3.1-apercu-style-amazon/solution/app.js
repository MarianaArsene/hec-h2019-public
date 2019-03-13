// Gestionnaire d'événement : lorsqu'on passe notre souris par-dessus un produit
$(".book-display").on("mouseenter", function() {
    
    // Je récupère le id du bouton grâce à l'attribut data
    var idBouton = $(this).data("id-btn");
    
    // Afficher le bouton "Quick look" associé à ce produit
    $("#btn-quick-look-" + idBouton).show();
    
});

// Gestionnaire d'événement : lorsqu'on notre souris sors de la zone d'un produit
$(".book-display").on("mouseleave", function() {
    
    // Je récupère le id du bouton grâce à l'attribut data
    var idBouton = $(this).data("id-btn");
    
    // Masquer le bouton "Quick look" associé à ce produit
    $("#btn-quick-look-" + idBouton).hide();
    
});

// Gestionnaire d'événement : lorsqu'on clique un des boutons "Quick look"
$(".btn-quick-look").on("click", function() {
    
    // On récupère le nom de la fenêtre modale
    var nomFenetre = $(this).data("modal-window");
    
    // Affichage dans la console du nom de la fenêtre modale à afficher
    console.log("Le bouton permet d'ouvrir la fenêtre modale : " + nomFenetre);
    
});