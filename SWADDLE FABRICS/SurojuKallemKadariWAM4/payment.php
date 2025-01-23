<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        form {
            width: 400px;
            /* Adjust width as needed */
            margin: 0 auto;
            /* Center the form horizontally */
        }

        label {
            display: inline-block;
            width: 120px;
            /* Set the width of labels */
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 160px;
            /* Adjust width as needed */
            padding: 10px;
            margin-bottom: 10px;

            border-radius: 4px;
            box-sizing: border-box;
            border: 2px solid black;
        }

        input[type="submit"] {
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

        input[type="submit"]:hover {
            background-color: DodgerBlue;
        }

        p {
            margin: 0;
            /* Remove default paragraph margin */
        }
    </style>

</head>

<body>

    <?php
    include "navbar.php";
    $totalprice = $_GET["amount"];

    ?>
    <br>
    <br>
    <h2>Pay with your Card</h2>

    <div id="content1" style="background-color: smokewhite;">

        <form action="paymentResult.php" method="POST">
            <p>
                <label>First Name: </label>
                <input id="nameTextBox" type="text" size="25" name="fNameTextBox" required>
            </p>
            <p>
                <label>Last Name: </label>
                <input id="nameTextBox" type="text" size="25" name="lNameTextBox" required>
            </p>
            <p>
                <label for="card_number">Card Number:</label>
                <input type="number" size="25" id="cardNumber" name="cardNumber" required>
            </p>
            <p>
                <label for="cvv">CVV:</label>
                <input type="number" id="cvv" name="cvv" required>
            </p>
            <p>
                <label for="expiry">Please Enter a Expiry:</label>
                <input type="date" id="myMonth" name="expiryMonthInput" min="<?php echo date('Y-m-d'); ?>" required>

            </p>
            <p>

                <label for="amount">Amount ($):</label>
                <input type="text" id="amount" name="amount" value="<?php echo $totalprice ?>" required>

            <p>
                <br><br><input type="submit" name="payNow" value="Pay Now">
            </p>

        </form>




    </div>
</body>

</html>