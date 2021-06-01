<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body class="body-top">	
	<?php
	include('templates/nav.php');
	?>
	<br>
	<main class="flex">
		<?php		
		include('dbconntent.php');
		$result = $mysqli->query('SELECT * FROM `moto`');
		{
			echo  '<div class="container"><h1 class="display-2 mb-3 " >Дорожные:</h1>
			<div class="row"><div class="card-deck" align="center">';
			while($row = $result->fetch_assoc())
			{
				if($row['Type']=='Дорожный'){
					echo '<div class="col-13">',
					'<br><div class="card bg-danger" style="width: 20rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>
					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';
				}
			}
			echo '</div></div>';
			$result = $mysqli->query('SELECT * FROM `moto`');
			echo  '<h1 class="display-2 mb-3 " >Супер Спорт:</h1>';
			echo '<div class="row justify-content-around"><div class="card-deck" align="center">';
			while($row = $result->fetch_assoc())
			{
				if($row['Type']=='Супер Спорт'){
					echo '<div class="col-13">',
					'<br><div class="card bg-danger" style="width: 20rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>

					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';
				}
			}
			echo '</div></div>';
			$result = $mysqli->query('SELECT * FROM `moto`');
			echo  '<h1 class="display-2 mb-3 " >Круизёры:</h1>';
			echo '<div class="row"><div class="card-deck" align="center">';
			while($row = $result->fetch_assoc())
			{
				if($row['Type']=='Круизёр'){
					echo '<div class="col-13">',
					'<br><div class="card bg-danger" style="width: 20rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>

					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';
				}
			}
			echo '</div></div>';
			echo '</div>';
			$result->close();
		}
		$mysqli->close();
		?>
	</main>
	<?php
	include('templates/footer.php');
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>