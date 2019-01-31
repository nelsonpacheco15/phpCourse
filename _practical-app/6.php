
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<!---  Step1: Make a form that submits one value to POST super global
 -->
 <form method="post">
	<input type="text" name="user">
	<input type="submit" name="submit">
 </form>
	<?php  

	if(isset($_POST['submit'])) {
		$_POST['user'];

		$user = $_POST['user'];
		$name = ['Nelson', 'Steve'];
	}

	

	if(!in_array($user, $name)) {
		echo "Wrong user";
	} else {
		echo "Hello" . $user;
	}


	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>