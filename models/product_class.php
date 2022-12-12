<?php
class Product
{
    public $name;
    public $price;
    public $code;

    public function __construct(String $name, Int $price, String $code)
    {
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
    }


    // debug-function
    public function printProduct()
    {
        $variable = "$this->name, " . $this->price . ", $this->code.";
        return $variable;
    }
}


require_once __DIR__ . "./products_classes.php";
