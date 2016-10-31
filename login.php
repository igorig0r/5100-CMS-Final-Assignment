<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'igor');

if(isset($_POST['submitted'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

	$result = mysqli_fetch_assoc($query);
	

	if ($result) {
		$_SESSION['user'] = $result;
		header('Location:/index.php');
	} else {
		echo "<h3>Not valid password</h3>";
	}

}

?>
<?php require_once "templates/header.php"
?>

<div class="sign-in col-md-12">
	
	<div class="col-md-6">
		
		<br>
		<form action="" method="post">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<a class="igor" href="registration.php">Registration</a>
			<button type="submit" name="submitted" class="igor login">Login</button>
			
		</form>
	</div>

</div>

<?php require_once "templates/footer.php"
?>
