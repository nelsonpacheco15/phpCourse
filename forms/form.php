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


<html>
<head></head>

<body>
<!-- basicamente o submit tem um "name value" porque ao clicar, a informação que esta no form, é enviada
 através do action para o form.php e atraves do metodo POST para ser guardado no isset -->
<form action="form.php" method="POST">
<input type="text" name="user">
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>
    
</body>
</html>