<html>
<head></head>

<body>



<?php

/*
while(4 < 10){ //isto vai fazer com que faça um loop infinito e o apache continue a executar este echo, porque a condiçao é sempre verdadeira!
    echo "hello students";
}
*/

//O que se costuma fazer:

$counter = 0;

while($counter <= 10){ //Para ele imprimir o 10, tem de ser menor ou igual a 10, se for so menor, vai imprimir so ate 9.
    echo "Hello student";
    $counter++ //o ++; é o auto increment, incrmeneta mais 1
    //$counter = $counter + 1;
//aqui o que isto vai fazer é que, vai adicionando um valor ao counter de todas as vezes que ele repetir o while
//até ser igual ou superior a 10, quando for assim, o while parara de ser executado.
}
  
    ?>

    
</body>
</html>