<?php
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";


$prova = new Cibo(new Prodotto("1","Mela","125 euro", "100"), true);
$provaCuccia = new Cuccia(new Prodotto("2","MightyFortress","800euro","30"),"100x70 cm", "Cemento Armato");