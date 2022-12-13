<?php
require_once __DIR__ . "./models/product_class.php";

$cat = new Category('cat');
$dog = new Category('dog');

require_once __DIR__ . "/database/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($array_data as $product) { ?>
                <div class="col-4 my_card-box">
                    <div class="card p-3">
                        <h4 class="text-center">
                            <?php echo $product->name ?>
                        </h4>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>