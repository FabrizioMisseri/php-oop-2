<?php
require_once __DIR__ . "./models/category_class.php";
require_once __DIR__ . "./models/product_class.php";

$croccantini = new Food('pollo', 23, 'adefrrt', 100, '100kcal', 'pollos');

var_dump($croccantini);
