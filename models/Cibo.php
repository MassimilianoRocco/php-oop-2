<?php

class Cibo extends Prodotto{
    public $nome;

    public function __construct(Prodotto $category, $nome ){
        $this->category = $category;
        $this->nome = $nome;
    }
       
}