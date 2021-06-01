<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!--link rel="stylesheet" href="css/style.css"-->

	<title>Kawasaki</title>
</head>
<body class="body-top">
	
	<?php
	#session_start();
	#include('tpl/header.php');
	include('templates/nav.php');
	?>
	<main class="flex">

		<?php
		include('dbconntent.php');

		$result = $mysqli->query('SELECT * FROM `moto`');
		{
			echo  '<div class="container"><h1 class="display-2 mb-3 " >Попробуйте</h1>
			<div class="row">';
			while($row = $result->fetch_assoc())
				{	if($row['Type']=='Дорожный'){
					
					echo '<div class="col-sm">',
					'<div class="card bg-danger" style="width: 18rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>

					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';}
					break;
				}

				$result = $mysqli->query('SELECT * FROM `moto`');

				while($row = $result->fetch_assoc())

				{	
					#echo var_dump($row);
					if($row['Type']=='Супер Спорт'){
					
					echo '<div class="col-sm">',
					'<div class="card bg-danger" style="width: 18rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>

					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';
					break;}
					
				}

				$result = $mysqli->query('SELECT * FROM `moto`');

				while($row = $result->fetch_assoc())

				{	
					#echo var_dump($row);
					if($row['Type']=='Круизёр'){
					
					echo '<div class="col-sm">',
					'<div class="card bg-danger" style="width: 18rem;">
					<img src="',$row['Picture'],'" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">',$row['Name'],'</h5>

					<a href="moto.php?id=',$row['id'],'" class="btn btn-dark">Подробнее</a>
					</div>
					</div>',
					'</div>';
					break;}
					
				}

				




				$result->close();
			}
			$mysqli->close();

			?>
		</main>
		<br>
		<?php

		include('templates/footer.php');
		?>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

	</body>
	</html>