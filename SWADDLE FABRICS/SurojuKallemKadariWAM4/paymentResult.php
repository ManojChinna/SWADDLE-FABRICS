<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body {
            background-color: #f0f0f0;
            /* Set a light background color for the body */
        }

        .payment-message {
            background-color: white;
            /* Set white background color for messages */
            padding: 10px;
            margin: 10px auto;
            /* Adjust margin for spacing */
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

        .center {
            text-align: center;
        }

        .button:hover {
            background-color: blue;
        }
    </style>

</head>

<body>

    <?php
    include "navbar.php";

    if (isset($_POST['payNow'])) {

        include("paymentIntermediaryClass.php");

        $firstName = $_POST['fNameTextBox'];
        $lastName = $_POST['lNameTextBox'];
        $cardNumber = $_POST['cardNumber'];
        $cvv = $_POST['cvv'];
        $expiry = $_POST['expiryMonthInput'];
        $price = $_POST['amount'];

        $intermediaryClass = new PaymentIntermediaryClass();
        $result = $intermediaryClass->PaymentDetails($firstName, $lastName, $cardNumber, $cvv, $expiry, $price);

        $firstName = trim($firstName);
        $lastName = trim($lastName);

        if (ctype_alpha($firstName) && ctype_alpha($lastName)) {
            $cardNumber = trim($cardNumber);
            $cvv = trim($cvv);
            $expiry = trim($expiry);

            if (is_numeric($cardNumber) && strlen($cardNumber) == 16) {
                if (is_numeric($cvv) && strlen($cvv) == 3) {
                    if ($expiry) {
                        if (is_numeric($price)) {
                            // All validations passed, proceed with further actions
                            $paymentmessage = " Hurry!! Your Payment Successful";
                            echo "<br><p class='payment-message'> $paymentmessage</p>";
                        } else {
                            echo "<br><p class='payment-message'>Please enter a valid amount</p>";
                        }
                    } else {
                        echo "<br><p class='payment-message'>Please enter a valid expiry month</p>";
                    }
                } else {
                    echo "<br><p class='payment-message'>Please enter a valid CVV</p>";
                }
            } else {
                echo "<br><p class='payment-message'>Please enter a valid card number</p>";
            }
        } else {
            echo "<br><p class='payment-message'>Please enter a valid first and last name</p>";
        }
    }
    ?>
    <div class="center">

        <ul>
            <li><a href="review.php" class="button">Would you like to give us feedback?</a></li>
        </ul>
    </div>


</body>

</html>