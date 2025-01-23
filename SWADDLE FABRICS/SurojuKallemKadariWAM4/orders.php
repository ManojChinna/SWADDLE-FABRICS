<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Swaddle Fabric Connect</title>
    <link rel="stylesheet" type="text/css" href="surojuStyles.css" />
</head>

<body background="img\backgoundimg.jpg">

    <?php
    include "navbar.php";
    ?>

    <div id="content">
        <?php
        if (isset($_POST["cartButton"])) {
            $favcolor = $_POST["favcolor"];
            echo $favcolor;
        }
        ?>

    </div>
</body>

</html>