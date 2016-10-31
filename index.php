<?php
require_once "config/database.php";
session_start();

if(isset($_GET['logout']) == 1 && isset($_SESSION['user'])) {
	unset($_SESSION['user']);
}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>IGOR'S SHOP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.css">	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>

	<!-- MAIN -->
	<div class="main container">
		<div class="row">
			
			

			<div class="header">
				

				<div class="col-md-4">
					<a href="#" class="igor"></a>
				</div>
				
				<!-- LOGOVANJE -->


				<?php 
				if (!isset($_SESSION['user'])) 
					{ ?>
				
				<div class="col-md-8">

					<a class="sign-out" href="login.php?logout=1">IZLOGUJ SE</a>
					<a class="sign-in" href="login.php">ULOGUJ SE</a>
					
				</div>
				
				<!-- DODAJ NOV PROIZVOD -->
				<div class="products">
					
					<a class="dodaj" href="proizvodi.php">DODAJ ARTIKAL</a>

					
				</div>

				
				<?php } else{?>
				
				<div class="col-md-6">

					<!-- Sign In -->
					<a class="sign-in" href="login.php">ULOGUJ SE</a>
					
				</div>

				<?php } ?>

			</div>

		

			<div class="shop-box">
				<h1>RADNJA</h1>
			</div>

			
			
			<table class="shop-table">
				<tr>
					<th>ID</th>
					<th>IME PROIZVODA</th>
					<th>CENA</th>
					<th></th>
					<th></th>
				</tr>

				<?php
				$sql = "SELECT * FROM products";
				$query = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($query)):
					?>
				<tr>
					<td><?= $row['id']; ?></td>
					<td><?= $row['ImeArtikla']; ?></td>
					<td><?= $row['Cena']; ?></td>
					<td><a href="delete.php?id=<?= $row['id']?>" class="obrisi">OBRISI</a></td>
					<td><a href="edit.php?id=<?= $row['id']?>" class="edituj">EDITUJ</a></td>    
				</tr>
			<?php endwhile; ?>
		</table>


		

		
	</div>
</div>
</div>

</body>
</html>