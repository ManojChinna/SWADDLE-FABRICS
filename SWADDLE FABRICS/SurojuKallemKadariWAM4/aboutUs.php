<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <link rel="stylesheet" href="styles.css" />
    <script type="text/javascript" src='aboutUs.js'></script>
    <style>
        /* Style for cards container */
        .sections {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        /* Style for individual card */
        .cards {
            width: 25%;
            /* Adjust width as per your preference */
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            /* White background */
        }

        .cards img {
            width: 100%;
            max-width: 150px;
            /* Adjust image size */
            height: auto;
            border-radius: 0%;
            /* Circular image */
        }

        .cards h3 {
            margin-top: 10px;
            font-size: 18px;
        }

        .cards input[type="button"] {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            /* Change button background color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cards input[type="button"]:hover {
            background-color: #0056b3;
            /* Change button hover background color */
        }

        /* Style for details paragraphs */
        .cards p {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>

</head>

<body>

    <?php
    include "navbar.php";
    ?>

    <h2>About US</h2>

    <div class="sections">
        <div class="cards">
            <img src="Suroju01.jpeg">
            <h3>Suroju Uma Maheshwari</h3>
            <input type="button" value="Suroju Uma Maheshwari Details" id="umaButton">
            <?php echo "<p id='umaWork'></p>"; ?>
        </div>
        <div class="cards">
            <img src="kallem.jpg">
            <h3>Krishna Reddy Kallem</h3>
            <input type="button" value="Krishna Reddy Kallem Details" id="krishnaButton">
            <?php echo "<p id='krishnaWork'></p>"; ?>
        </div>
        <div class="cards">
            <img src="kadari.jpg">
            <h3>Akshaya Kadari</h3>
            <input type="button" value="Akshaya Kadari Details" id="akshayaButton">
            <?php echo "<p id='akshayaWork'></p>"; ?>
        </div>
    </div>


</body>