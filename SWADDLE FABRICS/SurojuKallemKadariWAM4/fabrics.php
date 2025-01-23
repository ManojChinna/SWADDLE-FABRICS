<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Suroju Pages</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <form method="post" action="fabricResult.php">
        <h2>Take advantage of our special deals on fabric purchases! For orders between 5 and 10 yards, enjoy a 10% reduction per yard. And for orders of 11 yards or more, benefit from an even greater discount of 20% per yard. Whether you're working on a small project or a large-scale endeavor, these deals ensure you get the most value for your purchase. Don't miss out on these fantastic savings!</h3>

            <div id="content">

                <?php
                $fabric = array(
                    "Cotton" => array("img\cottonFabrics.jpg", 8.99),
                    "Silk" => array("img\silkFabric.jpg", 9.99),
                    "Wool" => array("img\woolenFabric.jpg", 9.49),
                    "Satin" => array("img\satinFabric.jpg", 10.49),
                    "Floral" => array("img\clothFloralFabric.jpg", 10.99)

                );
                $count = 0;
                foreach ($fabric as $material => $array) {


                ?>
                    <div class="card">
                        <img src="<?php echo $array[0]; ?>">
                        <h3><?php echo $material; ?><br> <?php echo "$" . $array[1]; ?> </h3>
                        <input type="hidden" name="fabricName[]" value="<?php echo $material; ?>">
                        <input type="hidden" name="fabricPrice[]" value="<?php echo $array[1]; ?>">
                        <label for="favcolor">Select your favorite color:</label>
                        <input type="color" id="favcolor" name="favcolor[]" value="#ff0000"> <br>
                        <p>Enter the quantity to be ordered:
                            <input type="number" id="lengthOfCloth" name="lengthOfCloth[]" min="0" max="20" value="0"><br>
                        </p>

                        <!-- <input type="submit" value="add to cart" name="cartButton"> -->

                    </div>
                <?php

                } ?>

            </div>
            <p>
                <input type="submit" value="add to cart" name="cartButton">

            </p>

    </form>
</body>

</html>