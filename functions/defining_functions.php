<html>
<head></head>

<body>


<?php

/*function say_something(){
    echo "Hello, are you okay?";
}

say_something(); */


//Agora vou experimentar fazer uma função para chamar outras funções

// Função 1 
function calculate(){
    echo 1111 + 1111;
}

//Função 2 
function say_something(){
    echo "OLá, sou um parolo!";
}

// ----------------------------------------

//Função para chamar as outras date_sunset
function init(){
    calculate();
    echo "<br>";
    say_something();
}


//Vou chamar a função init agora

init();

    ?>

    
</body>
</html>