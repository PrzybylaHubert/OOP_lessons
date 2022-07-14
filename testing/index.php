<?php
    declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include('test/index.php');
        $test = new person;
        $test->setName("sett");
        echo $test->showName();
        echo "<br>".person::siemas."<br>";
        echo person::$drinkingAge;
        person::changeDrinkingAge(18);

        try{
            person::changeDrinkingAge('18');
            echo person::$drinkingAge;
        }
        catch (TypeError $e){
            echo "<br>error: ".$e->getMessage();
        }

        echo person::$drinkingAge;
    ?>
</body>
</html>