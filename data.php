<?php

include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";


$prova = new Gioco(new Prodotto("Cane"), "Palla");