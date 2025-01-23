<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <script type="text/javascript" src='review.js'></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        form {
            width: 400px;
            /* Adjust width as needed */
            margin: 0 auto;
            /* Center the form horizontally */
            text-align: center;
        }

        label {
            display: inline-block;
            width: 120px;
            /* Set the width of labels */
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 160px;
            /* Adjust width as needed */
            padding: 10px;
            margin-bottom: 10px;

            border-radius: 4px;
            box-sizing: border-box;
            border: 2px solid black;
        }

        input[type="button"] {
            display: inline-block;
            padding: 10px 20px;
            /* Adjust padding as needed */
            background-color: RoyalBlue;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 0 auto;
        }

        input[type="button"]:hover {
            background-color: DodgerBlue;
        }

        p {
            margin: 0;

            /* Remove default paragraph margin */
        }

        .resultPara {
            background-color: white;
            padding: 10px;
            margin: 0 auto;
            border-radius: 5px;
            border: 2px solid black;
            font-size: 14px;
            text-align: center;
            width: 75%;
        }
    </style>
</head>

<body>

    <?php
    include "navbar.php";
    ?>
    <br>
    <h2>Give Us FeebBack here</h2><br>
    <div id="content1">

        <form action="review.php" method="post">
            <br>
            <p>
                <label for="nameBox">Name: </label>
                <input type="text" id="nameBox">
            </p>
            <p>
                <label for="emailBox">Email address: </label>
                <input type="email" id="emailBox">
            </p>
            <p>
                <label for="contactBox">Contact: </label>
                <input type="text" id="contactBox">
            </p>
            <p>
                <label for="messageBox">Message: </label>
                <input type="text" id="messageBox">
            </p>
            <br><br>
            <!-- The following line creates a button to submit the review -->
            <p>
                <input type="button" id="submitButton" value="Submit">
                <br><br>
            </p>

        </form>

        <!-- The following line creates a paragraph to display the result of the review submission -->
        <p id="resultPara"></p>
    </div>
</body>

</html>