<?php

class Gioco extends Prodotto{
    public $nome;

    public function __construct(Prodotto $category, $nome ){
        $this->category = $category;
        $this->nome = $nome;
    }

    public function getNome() {
        return "Il nome del gioco è : " . $this->nome;
    }
}