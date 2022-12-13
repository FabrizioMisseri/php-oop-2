<?php

class Kennel extends Product
{
    public $width;
    public $height;
    public $materials;

    public function __construct($category, String $name, Int $price, String $code, Int $width, Int $height, String $materials)
    {
        parent::__construct($category, $name,  $price,  $code);
        $this->width = $width;
        $this->height = $height;
        $this->materials = $materials;
    }
};
