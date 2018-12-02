<html>
<head></head>

<body>

<?php
   // $names = array('Maria', 'Jose'); //é um array normal

echo "<br>";

   // $names = array("first_name" => "Edwin"); //Associative arrays

echo "<br>";

    $names = ["first_name" => "Edwin", "last_name" => "Diaz"]; //maneira nova de fazer arrays

    //print_r($names);


    echo $names["first_name"] . $names["last_name"]; //para imprimir o primeiro e o ultimo tenho de fazer concatenação


    //Basciamente o que o array associativo faz é, faz com que ao inves de usarmos indexes para mostrar o valor dos arrays, usamos referencias
    $num1 = 10;
    $num2 = 20;
    
    
    
    echo $num1 + $num2 . "<br>"
    
    ?>

    
</body>
</html>