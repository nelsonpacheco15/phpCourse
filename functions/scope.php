<html>
<head></head>

<body>


<?php
$x = "Outside"; //global

function convert(){
    Global $x; // o objetivo é tornar a local, global
    $x = "Inside"; //local
}
//basicamente o que estou a tentar fazer é tornar a variavel x global,
//apartir do momento em que eu uso a função, posso alterar de outside para inside

echo $x;

echo "<br>";

convert(); //aqui quando chamo a função o valor da variavel global muda para inside
echo $x;



//exemplo
function convert2() {
    Global $x;
    $x = "Donno";
}

echo "<br>";
echo $x; //estou a imprimir o valor anterior ainda


convert2(); //ao usar a função onde defini outro valor global, o valor de x altera-se
echo "<br>";
echo $x;





    ?>

    
</body>
</html>