<?php

class Food extends Product
{
    public $name;
    public $price;
    public $code;
    public $weight;
    public $kcal;
    public $ingredients;

    public function __construct(String $name, Int $price, String $code, Int $weight, String $kcal, String $ingredients)
    {
        parent::__construct($name,  $price,  $code);
        $this->weight = $weight;
        $this->kcal = $kcal;
        $this->ingredients = $ingredients;
    }
};

class Toys extends Product
{
    public $width;
    public $height;
    public $guideline_txt;

    public function __construct(String $name, Int $price, String $code, Int $width, Int $height, String $guideline_txt)
    {
        parent::__construct($name,  $price,  $code);
        $this->width = $width;
        $this->height = $height;
        $this->guideline_txt = $guideline_txt;
    }
};

class Kennel extends Product
{
    public $width;
    public $height;
    public $materials;

    public function __construct(String $name, Int $price, String $code, Int $width, Int $height, String $materials)
    {
        parent::__construct($name,  $price,  $code);
        $this->width = $width;
        $this->height = $height;
        $this->materials = $materials;
    }
};
