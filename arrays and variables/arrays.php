<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

$numberList = array(267,8765,345,'5345', 345, '<h1>Hello</h1>');  // maneira antiga de fazer arrays
$numberList = [267,8765,345,'5345', 345, '<h1>Hello</h1>'];  // maneira nova

//print_r($numberList); //ESta função faz com que o array e seus indexes sejam impressos no ecra

 echo $numberList[5];
    //imprimir o index 5, ou seja o "h1".
    
?>

</body>
</html>