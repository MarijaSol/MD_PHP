<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $numbers1 = [1, 2, 3, 4, 5];
    $summa = 0;
    for ($i = 0; $i < 5; $i++) {
        $summa = $numbers1[$i] + $summa;
    }
    echo "Skaitlu summa ir $summa <br>";

    $numbers2 = [4, 43, 35, 53, 60, 3, 30];
    $x = 0;
    for ($i = 0; $i < 7; $i++) {
        if($numbers2[$i] > $x){
            $x = $numbers2[$i];
        }
    }
    echo "Lielakais skaitlis ir $x <br>";

    $numbers3 = [1, 2, 3, 4, 5];
    for ($i = 0; $i < 5; $i++) {
      	$x = $numbers3[$i] + $x;
    }
    $x = $x/$i;
    echo "Videja vertiba ir $x <br>";

    $numbers3b = [1, 2, 3, 4, 5];
    for ($i = 0; $i < 5; $i++) {
      	$x = $i;
    }
    $x = $x/2;
    echo "Mediana ir $numbers3b[$x] <br>";


    $numbers4 = [4, 43, 35, 53, 60, 3, 30];
    $x = $numbers4[0];
    for ($i = 0; $i < 7; $i++) {
        if($numbers4[$i] < $x){
            $x = $numbers4[$i];
        }
    }
    echo "Mazakais skaitlis ir $x <br>";

    $numbers5 = [4, 43, 35, 53, 60, 3, 30];
    $odd = 0;
    $even = 0;
    foreach($numbers5 as $x){
        if($x % 2 == 0){
            $even++;
        } else {
            $odd++;
        }
    }
    echo "Ir $even pāru skaitļu un $odd nepāru. <br>";

    $numbers6 = [1, 2, 3, 4, 5];
    $items = array();
        for ($i = 4; $i >= 0; $i--) {
            $items [] = $numbers6[$i];
        }
    print_r($items); 

    $numbers7 = [1, 2, 4, 3, 4, 5, 5, 5, 5, 6, 7];
    $items = array();
        for ($i = 0; $i < 11; $i++) {
          if($numbers7[$i-1] <> $numbers7[$i]){
			$items[] = $numbers7[$i];
          }
        }
    print_r($items);


    $numbers8a = [1, 2, 3];
    $numbers8b = [4, 5];
        for ($i = 0; $i < 3; $i++) {
              $numbers8a [] = $numbers8b[$i];
        }
     print_r($numbers8a);
?>




    
</body>
</html>