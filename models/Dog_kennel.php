<?php

class Dog_kennel extends Product{
 public $dimensions;
 public $composition;

    public function __construct($id, $name, $price, Category $category, $img,  $dimensions, $composition){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->img = $img;

        $this->dimensions = $dimensions;
        $this->composition = $composition;
    }

}
