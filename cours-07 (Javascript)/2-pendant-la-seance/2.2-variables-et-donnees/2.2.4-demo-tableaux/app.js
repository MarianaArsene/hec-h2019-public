// Déclaration et définition du tableau
var clubs = [
    "Canadiens de Montréal",
    "Rangers de New York",
    "Red Wings de Détroit"
];

// Pour accéder a un élément
console.log(clubs[0]);
console.log(clubs[2]);

// Pour modifier un élément
clubs[0] = "Predateurs Nashville";
console.log(clubs[0]);

// Pour ajouter un élément
clubs.push("Kings Los Angeles");
console.log(clubs[3]);

// var test = clubs.includes("Red Wings de Détroit");
// var test = clubs.includes("Maple Leafs de Toronto");
// var test = clubs.includes("Canadiens de Montréal");
var test = clubs.includes("Predateurs Nashville");
console.log(test);

// Connaître la quantité d'items dans le tableau
console.log(clubs.length);