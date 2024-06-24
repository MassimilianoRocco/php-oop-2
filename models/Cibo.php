<?php

class Cibo extends Prodotto{
    public $preCotto;
    public $proteico;

    public function __construct(Prodotto $prodotto, $preCotto = true || false, $proteico = true || false){
        parent::__construct($prodotto->id, $prodotto->nomeProdotto, $prodotto->prezzoProdotto, $prodotto -> pezziProdotto);
       $this->preCotto = $preCotto;
       $this->proteico = $proteico;
    }
       
    public function getInfoCibo() {
        return "Il nome del cibo è : " . $this->nomeProdotto . " e il booleano che indica se è proteico è settato a: " . $this->proteico;
    }
}