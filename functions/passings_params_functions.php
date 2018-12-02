<html>
<head></head>

<body>


<?php

function calculate($num1, $num2){ //Aqui estou a por dentro da função o parametro, neste caso, 2 variaveis vazias
    $sum = $num1 + $num2; //Aqui dentro da função digo que quero que esta função faça uma soma com os valores atribuidos as variaveis
    echo $sum; //aqui simplesmete faço o echo da soma
}

calculate(122, 322); //Aqui chamo a função e atribu-o os valores Às variaveis num1 e num2


echo "<br>";
//exemplo 2

function greeting($message){
    echo $message;
}

greeting("Hello people!")


    ?>

    
</body>
</html>