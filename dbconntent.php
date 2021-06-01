<?php
	$mysqli = new mysqli('localhost', 'root','root','kawasaki');
	if(mysqli_connect_errno())
			{
				printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n",mysqli_connect_errno());
				exit;
			}
?>