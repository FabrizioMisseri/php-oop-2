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

    public function printProduct()
    {
        $variable = "$this->name, " . $this->price . ", $this->code.";
        return $variable;
    }
}
