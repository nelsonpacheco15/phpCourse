<html>
<head></head>

<body>


<!----
<h2>Comparison OPerators</h2>
<pre>
equal ==
identical ===
compare > < >= <= <>
not equal !=
not identical !==
</pre>


<br>

<h2>Logical Operators</h2>
<pre>
And &&
Or ||
Not !
</pre>
--->

<?php

//Neste caso, o switch statement serve para, ponho uma variavel e depois com o switch proponho varios valores, 
//caso o numero dentro da variavel se encontre nos "cases", eleira imprimir o que esta dentro do case, 
//caso contrario podera imprimir o default

//é bom para testar um valor contra varios valores, é bom por exemplo para testar um formulario

$number = 34;

switch($number){
    case 34:
    echo "Its 34!";
    break;

    case 21:
    echo "Nop, its 34!";
    break;

    default: 
    echo "We could not find anything here!";
    break;
}

  
    ?>

    
</body>
</html>