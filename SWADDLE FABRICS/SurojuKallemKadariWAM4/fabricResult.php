<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <link rel="stylesheet" href="styles.css" />
    <style type="text/css">
        table {
            border-collapse: collapse;
            background-color: whitesmoke;
            margin: 0 auto;
            /* Center alignment */
        }

        table,
        td,
        th {
            border: 3px solid black;
            padding-left: 25px;
            padding-bottom: 5px;
            padding-top: 5px;
        }

        .center {
            text-align: center;
        }

        .deal-message {
            background-color: white;
            padding: 10px;
            margin: 0 auto;
            border-radius: 5px;
            border: 2px solid black;
            font-size: 14px;
            text-align: center;
            width: 75%;
        }


        .button {
            display: inline-block;
            padding: 10px 20px;
            /* Adjust padding as needed */
            background-color: RoyalBlue;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: DodgerBlue;
        }
    </style>
</head>

<body>

    <?php

    include "navbar.php"; ?>
    <br>

    <?php
    // Validate input data
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cartButton'])) {
        // Include necessary files
        include("paymentIntermediaryClass.php");

        // Validate input arrays
        $fabricNames = isset($_POST['fabricName']) ? $_POST['fabricName'] : [];
        $fabricPrices = isset($_POST['fabricPrice']) ? $_POST['fabricPrice'] : [];
        $colors = isset($_POST['favcolor']) ? $_POST['favcolor'] : [];
        $lengths = isset($_POST['lengthOfCloth']) ? $_POST['lengthOfCloth'] : [];

        // Validate input arrays
        if (count($fabricNames) !== count($fabricPrices) || count($fabricNames) !== count($colors) || count($fabricNames) !== count($lengths)) {
            die("Invalid input data");
        }

        // Initialize variables
        $fabricName = $fabricPrice = $color = $length = [];
        //$totalPrice = 0;

        // Filter valid entries
        foreach ($lengths as $i => $lengthVal) {
            if ($lengthVal > 0) {
                $fabricName[] = $fabricNames[$i];
                $fabricPrice[] = $fabricPrices[$i];
                $color[] = $colors[$i];
                $length[] = $lengthVal;
            }
        }

        // Initialize intermediary class
        $intermediaryClass = new PaymentIntermediaryClass();

        // Execute the query
        $result = $intermediaryClass->FabricDetails($fabricName, $fabricPrice, $color, $length);

        // Output table
        echo "<table>";
        echo "<caption><b>Cart</b></caption>";
        echo "<tr><th>Fabric Name</th><th>Price</th><th>Color</th><th>Quantity</th><th>Total Price of each Cloth</th></tr>";


        // Iterate over fabric details
        $tPrice = 0;
        for ($i = 0; $i < count($lengths); $i++) {
            // Output row for each fabric
            if ($lengths[$i] > 0) {
                $totalClothPrice = floatval($fabricPrices[$i]) * floatval($lengths[$i]);

                $beforeDiscount = $fabricPrices[$i] * $lengths[$i];
                if ($lengths[$i] > 5 && $lengths[$i] < 10) {
                    // Decrease price by $1 for 5 yards

                    $totalClothPrice = 0.9 * $beforeDiscount;
                    $dealmessage = "Hurry!! you are eligible for deal as your {$fabricNames[$i]} is between 5 to 10 yards the price before discount is {$beforeDiscount} and after applying discount the price is {$totalClothPrice}";
                    echo "<br><p class='deal-message'> $dealmessage</p>";
                } elseif ($lengths[$i] >= 10) {
                    // Decrease price by $5 for 10 yards
                    $totalClothPrice = 0.8 * $beforeDiscount;
                    $dealmessage = "Hurry!! you are eligible for special deal as your {$fabricNames[$i]} is greater than 10 yards  the price before discount is {$beforeDiscount} and after applying discount the price is {$totalClothPrice}";
                    echo "<br><p class='deal-message'> $dealmessage</p>";
                }
                $tPrice += $totalClothPrice;
                echo "<tr>";
                echo "<td>{$fabricNames[$i]}</td>";
                echo "<td>{$fabricPrices[$i]}</td>";
                echo "<td>{$colors[$i]}</td>";
                echo "<td>{$lengths[$i]}</td>";
                echo "<td>{$totalClothPrice}</td>";
                echo "</tr>";
            }
        }
        echo "<tr><td colspan='4'><b>Total Price</b></td><td id='totalPrice'>{$tPrice}</td></tr>";
        echo "</table>";
    } else {
        // Output error message if form has not been submitted
        echo "Form not submitted.";
    }
    ?>


    <div class="center">
        <ul>
            <li><a href="payment.php?amount=<?php echo $tPrice ?>" class="button">Proceed to Pay</a></li>
        </ul>
    </div>
</body>

</html>