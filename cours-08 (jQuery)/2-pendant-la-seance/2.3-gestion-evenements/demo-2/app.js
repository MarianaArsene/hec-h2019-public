$(".btn").on("click", function() {
    console.log("Click sur un bouton.");
    var nomTest = $(this).data("test");
    console.log(nomTest);
});