<?php

class Game extends Product{
   
    public $destination;

    public function __construct($id, $name, $price, Category $category, $destination){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;

        $this->destination = $destination;
    }
 
}