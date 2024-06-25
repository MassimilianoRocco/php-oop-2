<?php
include __DIR__ . "/models/Category.php";
include __DIR__ . "/models/Product.php";
include __DIR__ . "/models/Food.php";
include __DIR__ . "/models/Dog_kennel.php";
include __DIR__ . "/models/Game.php";

$categoryDog = new Category("dog");
$categoryCat = new Category("cat");

//FOOD EXAMPLES
$almoNature = new Food("1","Almo Nature Dog Food", "10$", $categoryDog, "No", "Yes");
$eukanuba = new Food("2", "Eukanuba Premium Dog Food", "50$", $categoryDog, "Yes", "Yes");
$caesar = new Food("3", "Caesar Dog Food", "30$", $categoryDog, "Yes", "Yes");
$purinaFelix = new Food("4", "Purina Felix Cat Food", "30$", $categoryCat, "Yes", "Yes");
$freshFish = new Food("5", "Fresh Fish by SeaKing", "20$", $categoryCat, "Yes","No");

//DOG KENNEL EXAMPLES
$leopardCatK = new Dog_kennel("6","Leopard Premium Fortress Kennel", "1000$", $categoryCat, "9.54 x 3.25 x 2.6 mt", "Composite Materials");
$castrumDog = new Dog_kennel("7","Castrum Cat Emperor Edition", "1500$", $categoryCat, "2x2x2 km", "Composite Materials");

//GAME EXAMPLES
$dogPlayBall = new Game("8", "Little Dog", "1$", $categoryDog,"Outside");
$catFlyGame = new Game("9", "F22Cats", "10$", $categoryDog,"Outside");

//ARRAY
$objects = [
    $almoNature,
    $eukanuba,
    $caesar,
    $purinaFelix,
    $freshFish,
    $leopardCatK,
    $castrumDog,
    $dogPlayBall,
    $catFlyGame
];