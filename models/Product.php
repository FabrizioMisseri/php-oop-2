<?php

require_once __DIR__ . "./category_class.php";
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


require_once __DIR__ . "./food.php";
require_once __DIR__ . "./toys.php";
require_once __DIR__ . "./kennel.php";
