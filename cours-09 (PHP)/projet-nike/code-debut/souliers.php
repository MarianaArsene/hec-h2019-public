<?php 

/**
 * Définition de la classe Soulier (voir cela comme une structure de données)
 */
class Soulier {
    
    public $title;
    public $description;
    public $price;
    public $qty_coloris;
    public $image_url;
    
    public function __construct($title, $description, $price, $qty_coloris, $image_url) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->qty_coloris = $qty_coloris;
        $this->image_url = $image_url;
    }
}

// Création des souliers, avec les paramètres requis
$soulier1 = new Soulier('NikeLab Air VaporMax Flyknit', 'Chaussure de running pour Homme', 255, 2, 'images/soulier-extra1.jpeg');
$soulier2 = new Soulier('Nike Air VaporMax Flyknit', 'Chaussure de running pour Femme', 255, 2, 'images/soulier-extra2.jpeg');
// ... création des souliers 3 et 4

// Création du tableau (array) contenant les différents souliers
$souliers = [
    $soulier1,
    $soulier2,
    // .. ajout des souliers 3 et 4 à la variable $souliers (array)
];

?>