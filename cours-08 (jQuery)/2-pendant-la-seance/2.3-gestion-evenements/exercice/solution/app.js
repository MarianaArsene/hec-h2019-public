$('.btn-achat').on('click', function() {
    // Actions à prendre si cet événement est observé
    var tagProduit = $(this).data("tag-produit");
    console.log(tagProduit);
});
