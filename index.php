<?php
require_once __DIR__ . "./models/Product.php";

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
                    <!-- CARD -->
                    <div class="card p-3">
                        <!-- titolo comune Products -->
                        <h4 class="text-center">
                            <?php echo $product->name ?>
                        </h4>
                        <ul>
                            <!-- blocco dati comune Products -->
                            <li>
                                <?php echo "codice-articolo: " . $product->code ?>
                            </li>
                            <li>
                                <?php echo "prezzo: " . $product->price ?>
                            </li>
                            <li>
                                <?php if ($product->category == $dog) {
                                    echo "animale: cane";
                                } else {
                                    echo "animale: gatto";
                                } ?>
                            </li>

                            <!-- verifica per FOODS -->
                            <?php if (get_class($product) == 'Food') { ?>
                                <li>
                                    tipo: cibo
                                </li>
                                <li>
                                    peso: <?php echo $product->weight ?>
                                </li>
                                <li>
                                    kcal: <?php echo $product->kcal ?>
                                </li>
                                <li>
                                    ingredients: <?php echo $product->ingredients ?>
                                </li>
                                <!-- verifica per TOYS -->
                            <?php } else if (get_class($product) == 'Toys') { ?>
                                <li>
                                    tipo: gioco
                                </li>
                                <li>
                                    larghezza: <?php echo $product->width ?>
                                </li>
                                <li>
                                    altezza: <?php echo $product->height ?>
                                </li>
                                <li>
                                    istruzioni: <?php echo $product->guideline_txt ?>
                                </li>
                                <!-- verifica per KENNEL -->
                            <?php } else if (get_class($product) == 'Kennel') { ?>
                                <li>
                                    tipo: cuccia
                                </li>
                                <li>
                                    larghezza: <?php echo $product->width ?>
                                </li>
                                <li>
                                    altezza: <?php echo $product->height ?>
                                </li>
                                <li>
                                    materiali: <?php echo $product->materials ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- / CARD -->
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>