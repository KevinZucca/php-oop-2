<?php

$dogSnacks = new Food("Dog", "Snacks", "8.99", "img/dog-food.jpeg", "Pup Peroni", "20");
$dogBone = new Toy("Dog", "Bone", "5.50", "img/dog-toy.jpg", "Dingo-Bone", "10", "Plastic");
$dogShampoo = new Clean("Dog", "Shampoo", "12.99", "img/dog-shampoo.jpg", "Neutral Shampoo", "7");
$dogKennel = new Kennel("Dog", "Kennel", "25.50", "img/dog-kennel.jpeg", "Sweet Dreams", "3", "60cm");

$dogSnacks->originalPrice = "10.00€";

$dogItems = [
    $dogSnacks, $dogBone, $dogShampoo, $dogKennel
];


$catCan = new Food("Cat", "Cans", "4.00", "img/cat-can.webp", "Friskies Patè", "25");
$catMouse = new Toy("Cat", "Mouse", "8.00", "img/cat-mouse.jpeg", "Tiny Hunter", "4", "Plastic");
$catShampoo = new Clean("Cat", "Shampoo", "12.99", "img/cat-shampoo.jpg", "Schampo", "2");
$catKennel = new Kennel("Cat", "Kennel", "20.00", "img/cat-kennel.jpg", "Sweet Dreams", "4", "45cm");

$catCan->originalPrice = "6.00€";
$catShampoo->originalPrice = "15.50€";


$catItems = [
    $catCan, $catMouse, $catShampoo, $catKennel
];
