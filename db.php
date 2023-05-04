<?php

$dogSnacks = new DogFood("Dog", "Snacks", "8.99", "img/dog-food.jpeg", "Pup Peroni", "20");
$dogBone = new DogToy("Dog", "Bone", "5.50", "img/dog-toy.jpg", "Dingo-Bone", "10", "Plastic");
$dogShampoo = new DogClean("Dog", "Shampoo", "12.99", "img/dog-shampoo.jpg", "Neutral Shampoo", "7");
$dogKennel = new DogKennel("Dog", "Kennel", "25.50", "img/dog-kennel.jpeg", "Sweet Dreams", "3", "60cm");


$dogItems = [
    $dogSnacks, $dogBone, $dogShampoo, $dogKennel
];


$catCan = new CatFood("Cat", "Cans", "4.00", "img/cat-can.webp", "Friskies Patè", "25");
$catMouse = new CatToy("Cat", "Mouse", "8.00", "img/cat-mouse.jpeg", "Tiny Hunter", "4", "Plastic");
$catShampoo = new CatClean("Cat", "Shampoo", "12.99", "img/cat-shampoo.jpg", "Schampo", "2");
$catKennel = new CatKennel("Cat", "Kennel", "20.00", "img/cat-kennel.jpg", "Sweet Dreams", "4", "45cm");


$catItems = [
    $catCan, $catMouse, $catShampoo, $catKennel
];
