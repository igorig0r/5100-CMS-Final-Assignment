<?php require_once "templates/header.php"
?>

<?php require_once "config/database.php";
?>



<?php


if(isset($_POST['submitButton'])) {
	$firstName = $_POST['first_name'];
	$lastName= $_POST['last_name'];
	$password = $_POST['password'];
	$email =  $_POST['email'];
	
	mysqli_query($conn, "INSERT INTO users SET email='$email', password='$password', first_name='$firstName', last_name='$lastName'");
	
	header("Location:/login.php");
}

?>




<div class="sign-in col-md-12">
	<div class="col-md-6">

		<form action="" method="post">

			<label for="firstName">IME</label>
			<input class="form-control" type="text" name="first_name" id="firstName" value="" />
			<label for="lastName">PREZIME</label>
			<input class="form-control" type="text" name="last_name" id="lastName" value="" />
			<label for="password">PASSWORD</label>
			<input class="form-control" type="password" name="password" id="password" value="" />
			
			<label for="email">E-MAIL</label>
			<input class="form-control" type="email" name="email" id="email" value="" />

			<br>

			<div style="clear: both;">
				<input class="igor" type="reset" name="resetButton" id="resetButton"	value="Reset Form" style="margin-left:10px;" />
				<input class="igor" type="submit" name="submitButton" id="submitButton"
				value="REGISTRUJ"/>
				
				
			</div>
			
		</div>

	</div>



</form>



<?php require_once "templates/footer.php"
?>