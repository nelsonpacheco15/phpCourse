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

    //Less <
    if(4 < 4){
        echo "True";
    };

echo "<br>";

    //Less equal <=
    if(4 <= 4){
        echo "True";
    };

echo "<br>";    

    //greater >
    if(4 > 4){
        echo "True";
    };

echo "<br>";    

    //not equal !=
    if(4 != 5){
        echo "True";
    };

echo "<br>";    

    //identical
    if(4 === 5){
        echo "True";
    };
   
echo "<br>";    

    //identical
    if(4 === 4){
        echo "True";
    };

echo "<br>";   

    //equal
    if(4 == "4"){ //4 é igual a 4 em string
        echo "True";
    };

echo "<br>"; 

    //identical
    if(4 === "4"){ //mas nao é identico porque um é um integer e outro é uma string
        echo "True";
    };

echo "<br>"; 

    //identical with or || operator
    if(4 === "4" || 5 < 10){ //se o primeiro nao executar "4 === "4", vai executar o segundo 
        echo "True";
    };

echo "<br>"; 

    //identical with && and operator
    if(4 === 4 && 5 < 10){ //com o operador && (and) todas as condiçoes tem de ser verdadeiras para o codigo ser executado
        echo "True";
    };

echo "<br>"; 
    
    ?>

    
</body>
</html>