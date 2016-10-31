<?php 	
require_once "config/database.php";
require_once "templates/header.php";
if(isset($_POST['submitButton'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];	
	mysqli_query($conn, "INSERT INTO products SET ImeArtikla='$name', Cena='$price' ");
	header("Location:/index.php"); 
}

?>


<div class="sign-in col-md-12">
	<div class="col-md-6">


		<form action="" method="post">
			<label for="name">Ime Artikla</label>
			<input class="form-control" type="text" name="name" id="name" value="" />
			<label for="price">CENA</label>
			<input class="form-control" type="text" name="price" id="price"/>
			<input type="submit" name="submitButton" class="btn btn-color" style="margin-top: 20px"	>
		

	</form>

</div>
</div>

<?php require_once "templates/footer.php" ?>