
<html>
<head></head>

<body>
<!-- basicamente o submit tem um "name value" porque ao clicar, a informação que esta no form, é enviada
 através do action para o form.php e atraves do metodo POST para ser guardado no isset -->
<form action="formProcess.php" method="POST">
<input type="text" name="user">
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>
    
</body>
</html>