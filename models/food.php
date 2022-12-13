<?php

class Food extends Product
{
    public $name;
    public $price;
    public $code;
    public $weight;
    public $kcal;
    public $ingredients;

    public function __construct($category, String $name, Int $price, String $code, Int $weight, String $kcal, String $ingredients)
    {
        parent::__construct($category, $name,  $price,  $code);
        $this->weight = $weight;
        $this->kcal = $kcal;
        $this->ingredients = $ingredients;
    }
};
