<?php

class Food extends Product{
    
    public $ready_cooked;
    public $protein;

    public function __construct($id, $name, $price, Category $category, $protein, $ready_cooked){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;

        $this->protein = $protein;
        $this->ready_cooked = $ready_cooked;
    }
}