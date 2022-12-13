<?php

class Toys extends Product
{
    public $width;
    public $height;
    public $guideline_txt;

    public function __construct($category, String $name, Int $price, String $code, Int $width, Int $height, String $guideline_txt)
    {
        parent::__construct($category, $name,  $price,  $code);
        $this->width = $width;
        $this->height = $height;
        $this->guideline_txt = $guideline_txt;
    }
};
