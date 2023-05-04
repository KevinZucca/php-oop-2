<?php

require_once "./Models/DOGS/DogProduct.php";
require_once "./Models/DOGS/DogFood.php";
require_once "./Models/DOGS/DogToy.php";
require_once "Models/DOGS/DogClean.php";
require_once "Models/DOGS/DogKennel.php";


require_once "./Models/CATS/CatProduct.php";
require_once "./Models/CATS/CatFood.php";
require_once "./Models/CATS/CatToy.php";
require_once "./Models/CATS/CatClean.php";
require_once "./Models/CATS/CatKennel.php";


require_once "./db.php";

// var_dump($dogItems);
// var_dump($catItems);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pet-shop-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.scss">
</head>

<body>

    <!-- including navbar in index -->
    <?php
    include "./Views/Partials/header.php";
    ?>

    <!-- including main cat-container in index -->
    <?php
    include "./Views/Partials/mainCat.php";
    ?>

    <!-- including main dog-container in index -->
    <?php
    include "./Views/Partials/mainDog.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>