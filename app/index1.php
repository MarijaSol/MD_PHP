<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $operand = $_POST['operand'];
    ?>

    <form action="/index.php" method="post">
        <p>ievadiet skaitļus</p>
        <input type="text" name ="a">
        <input type="text" name ="b">
        <input type="text" name ="c"> <br><br>

        <form action="/index.php">
        <label for="summa">summa: </label>
        <input type="radio" id="summa" name="operand" value="summa"><br><br>
        <label for="starpiba">starpiba: </label>
        <input type="radio" id="summa" name="operand" value="starpiba"><br><br>
        <label for="summa">reizinasana: </label>
        <input type="radio" id="reizinasana" name="operand" value="reizinasana"><br><br>
        <label for="dalisana">dalisana: </label>
        <input type="radio" id="summa" name="operand" value="dalisana">
        <input type="submit" value="Submit">

    </form>


<?php

    if ($operand == 'summa') {
        echo 'summa '; 
        echo $a + $b + $c;
    } elseif ($operand == 'starpiba') {
        echo 'starpiba '; 
        echo $a - $b - $c ;
    } elseif ($operand == 'dalisana') {
        echo  'dalisana'; 
        echo $a / $b / $c ;
    } elseif ($operand == 'reizinasana') {
        echo  'reizinasana '; 
        echo $a * $b * $c ;
    }
?>
    
    
</body>
</html>