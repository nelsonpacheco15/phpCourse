<html>
<head></head>

<body>


<?php

function addNumbers($num1, $num2){ // 1- nos parametros ponho as variaveis vazias

    $sum = $num1 + $num2;
    return $sum; //3- ao inves do echo, uso return para me retornar o valor da soma
}

 $result = addNumbers(43, 21); // 2- atribuo valor Às variaveis    ||   4- adiciono uma variavel para guardar o valor da soma do "addNumbers"
echo $result;
 echo "<br>";

 //$result = addNumbers(); //POsso reutilizar esta função e o o valor mais recente que eu atribuir sera guardado na variavel result
 $result = addNumbers(100, $result); //aqui estou a adicionar 100 ao valor ja existente
echo $result;

echo "<br>";

$result = addNumbers(222222, $result); 
echo $result;

    ?>

    
</body>
</html>