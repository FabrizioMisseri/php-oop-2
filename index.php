<?php
require_once __DIR__ . "./models/category_class.php";
require_once __DIR__ . "./models/product_classes.php";

$croccantini = new Product('pollo', 23, 'adefrrt');
echo $croccantini->printProduct();
