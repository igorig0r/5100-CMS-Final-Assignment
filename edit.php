<?php 	
require_once "config/database.php";
require_once "templates/header.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);




if(isset($_POST['submitButton'])) {

	$name = $_POST['ImeArtikla']; 
	$price = $_POST['Cena'];	

	mysqli_query($conn, "UPDATE products SET ImeArtikla='$name', Cena='$price' WHERE id = '$id' ");
	
	header("Location:/index.php"); 
}

?>


<div class="sign-in col-md-12">
	<div class="col-md-6">


		<form action="" method="post">
			<label for="name">Ime Artikla</label>
			<input class="form-control" type="text" name="ImeArtikla" id="ImeArtikla" value="<?= $post['ImeArtikla'] ?>" />
			<label for="price">Cena</label>
			<input class="form-control" type="text" name="Cena" id="Cena" value="<?= $post['Cena'] ?>" />

			<input type="submit" name="submitButton" class="btn btn-color" style="margin-top: 20px"	>
		</label>

	</form>

</div>
</div>

<?php require_once "templates/footer.php" ?>