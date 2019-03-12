$("#inputPrix").on("keyup", function() {
    
    var prixActuel = $("#inputPrix").val();
    console.log("Le prix actuel est: " + prixActuel);
    
    if (prixActuel > 50) {
        $("#alerte-sans-rabais-20").hide();  
        $("#alerte-avec-rabais-20").show();
        console.log("le prix est supérieur a 50");
    } else {
        $("#alerte-avec-rabais-20").hide();
        $("#alerte-sans-rabais-20").show();  
        console.log("le prix est inférieur ou égal a 50");
    }
    
});
