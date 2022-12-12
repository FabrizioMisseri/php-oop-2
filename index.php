<?php
require_once __DIR__ . "./models/category_class.php";
require_once __DIR__ . "./models/product_class.php";

$croccantini = new Product('pollo', 23, 'adefrrt');

var_dump($croccantini);
