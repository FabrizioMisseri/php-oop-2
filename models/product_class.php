<?php
class Product
{
    public $name;
    public $price;
    public $code;
    public $category;

    public function __construct(String $category, String $name, Int $price, String $code)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
    }
}


require_once __DIR__ . "./products_classes.php";
