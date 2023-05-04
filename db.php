<?php

$dogSnacks = new DogFood("Dog", "Snacks", "8.99", "img", "Royal dog adult snacks", "20 pieces");
$dogBone = new DogToy("Dog", "Bone", "5.50", "img", "Dingo-Bone", "10 pieces", "Plastic");
$dogShampoo = new DogClean("Dog", "Shampoo", "12.99", "img", "Fast Cleaner", "7 pieces");
$dogKennel = new DogKennel("Dog", "Kennel", "25.50", "img", "Sweet Dreams", "3 pieces", "60cm");


$dogItems = [
    $dogSnacks, $dogBone, $dogShampoo, $dogKennel
];


$catCan = new CatFood("Cat", "Cans", "4.00", "img", "Petite cat", "25 pieces");
$catMouse = new CatToy("Cat", "Mouse", "8.00", "img", "Tiny Hunter", "4 pieces", "Plastic");
$catShampoo = new CatClean("Cat", "Shampoo", "12.99", "img", "Pet Wash", "2 pieces");
$catKennel = new CatKennel("Cat", "Kennel", "20.00", "img", "Sweet Dreams", "4 pieces", "45cm");


$catItems = [
    $catCan, $catMouse, $catShampoo, $catKennel
];
