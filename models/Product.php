<?php

require_once __DIR__ . "./Category.php";
class Product
{
    public $name;
    public $price;
    public $code;
    public $category;

    public function __construct($category, String $name, Int $price, String $code)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
    }

    // debug
    public function getName()
    {
        return $this->name;
    }
}


require_once __DIR__ . "./Food.php";
require_once __DIR__ . "./Toys.php";
require_once __DIR__ . "./Kennel.php";
