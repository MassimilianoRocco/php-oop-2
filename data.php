<?php
include __DIR__ . "/models/Category.php";
include __DIR__ . "/models/Product.php";
include __DIR__ . "/models/Food.php";
include __DIR__ . "/models/Dog_kennel.php";
include __DIR__ . "/models/Game.php";

$categoryDog = new Category("dog");
$categoryCat = new Category("cat");

//FOOD EXAMPLES
$almoNature = new Food("1","Almo Nature Dog Food", "10$", $categoryDog, "https://m.media-amazon.com/images/I/81Wpx0ZVMVL.__AC_SX300_SY300_QL70_ML2_.jpg", "No", "Yes");
$eukanuba = new Food("2", "Eukanuba Premium Dog Food", "50$", $categoryDog,"https://media.zooplus.com/bilder/1/400/81022_pla_eukanuba_activeadultlarge_15_3kg_1.jpg", "Yes", "Yes");
$caesar = new Food("3", "Caesar Dog Food", "30$", $categoryDog, "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwdd752a12/idt/503411.jpg?sw=800&sh=800","Yes", "Yes");
$purinaFelix = new Food("4", "Purina Felix Cat Food", "30$", $categoryCat,"https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwd3525efa/143248_0.jpg?sw=400&sh=400", "Yes", "Yes");
$freshFish = new Food("5", "Fresh Fish by SeaKing", "20$", $categoryCat, "https://static.zoomalia.com/prod_img/90108/lm_642291597a100aadd814d197af4f4bab3a71638883773.jpg", "Yes","No");

//DOG KENNEL EXAMPLES
$leopardCatK = new Dog_kennel("6","Leopard Premium Fortress Kennel", "1000$", $categoryCat, "https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Leopard_2_A5_der_Bundeswehr.jpg/260px-Leopard_2_A5_der_Bundeswehr.jpg", "9.54 x 3.25 x 2.6 mt", "Composite Materials");
$castrumDog = new Dog_kennel("7","Castrum Cat Emperor Edition", "1500$", $categoryCat, "https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/DevaMinervaPlan%28bq%29.jpg/220px-DevaMinervaPlan%28bq%29.jpg", "2x2x2 km", "Composite Materials");

//GAME EXAMPLES
$dogPlayBall = new Game("8", "Little Dog", "1$", $categoryDog,"https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Little_boy.jpg/260px-Little_boy.jpg", "Outside");
$catFlyGame = new Game("9", "F22Cats", "10$", $categoryDog, "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Two_F-22_Raptor_in_flying.jpg/220px-Two_F-22_Raptor_in_flying.jpg", "Outside");

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