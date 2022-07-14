<?php
    declare(strict_types = 1);
    include ('loader.php');
    $operator = $_POST['operator'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calculate = new calc((string) $operator, (int)$num1, (int)$num2);
    try{
        echo $calculate->calculator();
    }
    catch(TypeError $e){
        echo $e->getMessage();
    }
?>