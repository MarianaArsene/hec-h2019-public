<?php

// Variable pour la date de début de la bannière des Jeux Olympiques
$dateDebut = new DateTime('2018-03-10');

// Variable pour la date de fin de la bannière des Jeux Olympiques
$dateFin = new DateTime('2018-03-19');

// Variable pour la date courante
$dateMaintenant = new DateTime("now");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="alert alert-info">
                    Nous sommes pendant la période des Jeux olympiques et paralympiques.
                </div>
                <div class="alert alert-success">
                    La Toyota Camry est offerte en rabais!
                </div>
            </div>
        </div>
    </div>
</body>
</html>