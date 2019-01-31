<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
//  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP 

	if(10 < 10) {
		echo "Bah, try again";
	}elseif(10 > 10){
		echo "NOt this time";
	}else{
		echo "I love PHP";
		echo "<br>";
	}




//	Step 2: Make a forloop  that displays 10 numbers

for($contador= 0; $contador <= 10; $contador++) {
	echo $contador;
	echo "<br>";

}


//	Step 3 : Make a switch Statement that test againts one condition with 5 cases

$value = 32;

switch($value){
	case 20:
	echo "Nope";
	break;

	case 32:
	echo "You made it!";
	break;

	case 31:
	echo "So close...";
	break;

	case 33:
	echo "one before";
	break;

	case 32:
	echo "You made it twice";
	break;
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>