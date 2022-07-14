<!DOCTYPE html>
<?php
    include_once "abstract_class/Payment-abstract.php";
    include_once "class/buyProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $buy = new buyProduct();
        echo $buy->getPayment();
    ?>
</body>
</html>