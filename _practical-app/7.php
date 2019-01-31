<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	// Step 1 - Create a database in PHPmyadmin

	//	Step 2 - Create a table like the one from the lecture

	//	Step 3 - Insert some Data

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];


		$db = mysqli_connect('localhost', 'nelson', '1234', 'loginapp');
		if(!$db){
			die("Couldnt reach db!");
		}


		$query = "INSERT INTO users(username, password) ";
		$query .= "VALUES ('$username', '$password')";

		$result= mysqli_query($db, $query);
		if(!$result){
			die("Query failed" . mysqli_error());
		}else {
			echo "Record done!";
		}
	}
		

	//	Step 4 - Connect to Database and read data
	$db = mysqli_connect('localhost', 'nelson', '1234', 'loginapp');
	if(!$db){
		die("Couldnt reach db!");
	}
	$query = "SELECT * FROM users";
	$result = mysqli_query($db, $query);
	if(!$result){
		die("Failed" . mysqli_error());
	}else {
		echo "Here is your list";
	}

	while ($row = mysqli_fetch_assoc($result)) {
		print_r($row);
	}
	
	?>


	<!----form----->

	<div class="container">
	<div class="col-sm-6">
	<form action="7.php" method="post">

	<div class="form-group">
	<label for="username">Username</label>
	<input class="form-control" type="text" name="username">
	</div>

	<div class="form-group">
	<label for="password">Password</label>
	<input class="form-control" type="password" name="password">
	</div>

	<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</form>
	</div>
	</div>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
