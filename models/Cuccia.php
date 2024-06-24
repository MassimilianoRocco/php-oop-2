<?php

class Cuccia extends Prodotto{
 public $dimensione;
 public $materiale;

 public function __construct(Prodotto $prodotto, $dimensione, $materiale){
    parent::__construct($prodotto->id, $prodotto->nomeProdotto, $prodotto->prezzoProdotto, $prodotto -> pezziProdotto);
   $this->dimensione = $dimensione;
   $this->materiale = $materiale;
}

public function getInfoCuccia() {
    return "Il nome della cuccia è : " . $this->nomeProdotto . ", le dimensioni sono " . $this->dimensione . ", è fatta di ". $this->materiale . ", ed il prezzo è di " . $this->prezzoProdotto;
}
}