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
		<div class="container-fluid">
			<?php 
			include("dbconntent.php");
			$label ='id';
			$id = false;
			if (!empty($_GET[$label])) {
				$id = $_GET[$label];
			}
			$result = $mysqli->query("SELECT * FROM `moto` WHERE id = '$id'");
			$myrow = $result->fetch_assoc();
			echo '<div class="row justify-content-center">
			<div class="col-7">
			<h1 class="display-4">',$myrow['Name'],'</h1>
			</div>
			<div class="row justify-content-center">
			<div class="col-7">
			<img src="',$myrow['Picture'],'"  class="img-fluid" alt="...">
			</div>
			<div class="row justify-content-center">
			<div class="col-13">
			<p class="text-center fs-3">',$myrow['Description'],'</p>
			</div>
			</div>
			<div class="table-responsive">
			<table class="table align-middle " style="background-color: #dc3545!important;">
			<thead>
			<tr>
			<th scope="col" class="w-25">Двигатель</th>
			<th scope="col" class="w-25">Трансмиссия</th>
			<th scope="col" class="w-25">Общие</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td><ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Тип двигателя
			<span class="badge bg-danger rounded-pill">',$myrow['Engine`s type'],'</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Объем двигателя 
			<span class="badge bg-danger rounded-pill">',$myrow['Engine volume'],'</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Лошадиные силы
			<span class="badge bg-danger rounded-pill">',$myrow['Horsepower'],'</span>
			</li>
			</ul></td>
			<td><ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Трансмиссия
			<span class="badge bg-danger rounded-pill">',$myrow['Transmission'],'</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Сцепление
			<span class="badge bg-danger rounded-pill">',$myrow['Clutch'],'</span>
			</li>
			</ul></td>
			<td><ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Модельный год
			<span class="badge bg-danger rounded-pill" >',$myrow['Model year'],'</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Объем бака
			<span class="badge bg-danger rounded-pill" >',$myrow['Volume of the tank'],'</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
			Снаряженная масса
			<span class="badge bg-danger rounded-pill">',$myrow['Curb weight'],'</span>
			</li>
			</ul></td>
			</tr>
			</tbody>
			</table>
			</div>
			';
			?>
		</div>
	</main>
	<?php
	include('templates/footer.php');
	?>
	<script src="http://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>