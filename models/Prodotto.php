<?php 

class Prodotto extends Categoria{

    public function __construct(public $id, public $nomeProdotto, public $prezzoProdotto, public $pezziProdotto ) {
        parent::__construct();
    }
}