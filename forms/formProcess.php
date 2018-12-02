<?php 
//basicamente ao clicar no botao submit todos os valores que tenham "name" e estejam dentro do if
//sao submetidos
if (isset($_POST['submit'])) {

    //isto basicamente esta a funcionar como base de dados
    $name = ["Edwin", "Nelson", "John", "Maria", "Doe"];
    $min = 5;
    $max = 15;

   $user = $_POST['user'];
   $pass = $_POST['password'];


   //echo "Hello there" . " " . $user . "<br>";
   //echo "Your password is:" . " " . $pass;


   if(strlen($user) < $min ) {
        echo "Your username should have atleast 8 characters!";
   }

   if(strlen($user) > $max ) {
    echo "Your username should be shorter!";
}


if(!in_array($user, $name)){
    echo "Wrong username";
} else {
    echo "Welcome $user";
}
}
?>