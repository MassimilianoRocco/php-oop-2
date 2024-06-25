<?php 

class Product{

    //INSTANCE VARIABLES
    public $id;
    public $name;
    public $price;
    public $category;
    
    public $img;

    //CONSTRUCTOR
    public function __construct($id, $name, $price, Category $category){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    //OTHER FUNCTIONS
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getCategory(){
        return $this->category;
    }
    
}