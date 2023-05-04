<?php

$dogSnacks = new DogFood("Dog", "Snacks", "8.99", "img", "Royal dog adult snacks", "20");
$dogBone = new DogToy("Dog", "Bone", "5.50", "img", "Dingo-Bone", "10", "Plastic");
$dogShampoo = new DogClean("Dog", "Shampoo", "12.99", "img", "Fast Cleaner", "7");
$dogKennel = new DogKennel("Dog", "Kennel", "25.50", "img", "Sweet Dreams", "3", "60cm");


$dogItems = [
    $dogSnacks, $dogBone, $dogShampoo, $dogKennel
];


$catCan = new CatFood("Cat", "Cans", "4.00", "img", "Petite cat", "25");
$catMouse = new CatToy("Cat", "Mouse", "8.00", "img", "Tiny Hunter", "4", "Plastic");
$catShampoo = new CatClean("Cat", "Shampoo", "12.99", "img", "Pet Wash", "2");
$catKennel = new CatKennel("Cat", "Kennel", "20.00", "img", "Sweet Dreams", "4", "45cm");


$catItems = [
    $catCan, $catMouse, $catShampoo, $catKennel
];
