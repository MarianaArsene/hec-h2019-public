// Écrire votre code ci-dessous...

$(".left-thumb").on("mouseenter", function() {
    // Récupération de la source de l'image principale à utiliser (en lien avec le thumbnail)
    var srcImagePrincipale = $(this).data("toggle-img-src");
    
    // Modification de la source de l'image principale
    $('#main-img').attr('src', srcImagePrincipale);
});