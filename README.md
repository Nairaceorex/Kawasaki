# Kawasaki


Содержание
ВВЕДЕНИЕ	3
1 ОСНОВНАЯ ЧАСТЬ	4
1.1 ПОСТАНОВКА ЗАДАЧИ	4
1.1.1 Назначение	4
1.1.2 Требования к изделию	4
1.2 СХЕМА САЙТА	5
1.2.1 Структура сайта	5
1.2.2 Схема сайта	5
1.3 РАЗРАБОТКА САЙТА	6
1.3.1 Создание шаблонов	7
1.3.2 Создание страницы «О нас»	8
1.3.3 Создание и подключение к базе данных	11
1.3.4 Создание страницы «Каталог»	16
1.3.5 Создание страницы Мотоцикла	19
1.3.6 Создание страницы «Главная»	21
ЗАКЛЮЧЕНИЕ	22
СПИСОК ИСПОЛЬЗОВАННЫХ ИСТОЧНИКОВ	23
ПРИЛОЖЕНИЕ А	24
ПРИЛОЖЕНИЕ Б	29

 
ВВЕДЕНИЕ

В современном мире информационные технологии занимают значительную часть нашей жизни. Сейчас почти каждый бизнес, каталог, магазин и т.д. имеет свой сайт. Он необходим для информирования клиентов о том, что есть в предприятии, в данном случае каталог мотоциклов Kawasaki.
Актуальность темы проекта заключается в том, что на данный момент поиск информации в Интернете по любому хобби, любого человека – очень простой и быстрый процесс.
Также актуальна тематика веб-сайта. В наше время очень много мотолюбителей, которые помимо покупки аппарата в интернете, так же общаются и ищут различную информацию о нем.
Целью проекта является процесс создания сайта для каталога мотоциклов Kawasaki со списком мотоциклов и информацией о них.
Для достижения этой цели необходимо решить следующие задачи:
1)	провести анализ предметной-области и деятельности компании;
2)	спроектировать структурную схему и макет сайта;
3)	разработать сайт, используя базу данных;
4)	реализовать процесс добавления мотоциклов через базу данных;
При создании сайта использовал HTML, OpenServer, PHP, CSS, Java Script,  Bootstrap.
 
1 ОСНОВНАЯ ЧАСТЬ

1.1 ПОСТАНОВКА ЗАДАЧИ

1.1.1 Назначение

Данный сайт разрабатывался для каталога мотоциклов «Kawasaki». Назначение сайта состоит в том, чтобы информировать теоретических клиентов о новинках мотоциклов.

1.1.2 Требования к изделию

Сайт должен выполнять функцию информирования клиента о мотоциклах, которые только появились; о расположении офиса.
На сайте должна быть реализована база данных для хранения информации о мотоциклах.
Мотоциклы делятся на три группы: Дорожные, Супер Спорт, Круизёры.
Супер Спорт - мотоциклы, объем двигателя, которых превышает 1000 куб. см.
Дорожные - мотоциклы с прямой посадкой пилота и минимумом пластика. Иногда их еще называют классическими мотоциклами, и, как следствие, современные реплики машин, которые выпускались в середине прошлого века, вполне заслуженно получили определение – неоклассики. 
Круизер - это мотоциклы со своими специфическими особенностями. Слово «круизер» в переводе с английского означает путешественник. Обычно это мотоцикл, у которого сиденье расположено низко, а подножки вынесены вперёд.
 
1.2 СХЕМА САЙТА

1.2.1 Структура сайта

Сайт состоит из 4 страниц, из которых 1 страница служит шаблоном для 12 других.
С любой страницы сайта можно попасть на страницы «Главная», «Каталог», «О нас».

1.2.2 Схема сайта

Схема сайта отображена на рисунке 1.1:

 

Рисунок 1.1 - Схема сайта Каталога Kawasaki
 
1.3 РАЗРАБОТКА САЙТА

При разработке сайта использовались фреймворк Bootstrap и Open Server. Bootstrap для адаптации дизайна сайта, Open Server для создания локальной базы данных для хранения там необходимой информации.
Для того, чтобы использовать Bootstrap его необходимо скачать с официального сайта Bootstrap.
Open Server необходимо скачать и установить, после перезагрузить ПК.
В папке Open Server переходим в каталог domains, внутри которого создаем папку проекта(например «Kawasaki»).Важно, наименование папки проекта должно быть коротким и на английсом языке, в противном случае Open Server не обнаружит. Также если папка проекта создана недавно, то следует перезапустить Open Server, для этого есть соответствующая кнопка на панели приложения. В неё создаём файлы расширения php, с их помощью получим доступ к базе данных мотоциклов и для динамического создания страниц. Также понадобятся папки для изображений и шаблонов страниц. 
Для редактирования кода php исползовался редактор Sublime Text 3.
Чтобы открыть наш проект в браузере, активируем Open Server. На локальном сервере во вкладке «Мои проекты» (Open Server) выбираем пунтк, соответствующий нашему проекту. Браузер уведомит о корректности работы Open Server.
 
1.3.1 Создание шаблонов

В папке templates cоздаем страницы для навигационной панели и подвала (nav.php, footer.php).
Содержимое файлов представляет собой обычную гиппер-текстовую разметку HTML. Их особенностью заключается в содержимом тега body, внутри находятся только неизменяемые части сайта. 
Так, например, в nav.php содержится код навигационной панели на рисунке 1.2, аналогично создается footer.php.

 
Рисунко 1.2 – Содержимое nav.php

Результаы отображены на рисунках 1.3 - 1.4:

 
Рисунок 1.3 – Навигационная панель

 
Рисунок 1.4 - Подвал

1.3.2 Создание страницы «О нас»

В папке проекта создаем страницу «О нас» contacts.php.
Для начала подключим наши шаблоны. В начале документа вставляем php код session_start(), как показано на рисунке 1.5, эта функция создаёт сессию, либо возобновляет существующую.

 
Рисунок 1.5 – Подключение функции запуска или возобновлении сессии

Теперь перейдем самим шаблонам, их подключаем с помощью include(), показанной на рисунках 1.6 и 1.7. Данное выражение включает и выполняет указанный файл. Их прописываем в тех местах кода где должны находится, в данном случае над контентной частью и под ней.

 
Рисунок 1.6 – Подключение навигационной панели

 
Рисунок 1.7 – Подключение подвала

Для корректной работы стилей Bootstrap подключим его CSS и JS библиотеки (смотреть рисуноки 1.8 и 1.9)

 
Рисунок 1.8 – Подключение CSS Bootstrap

 
Рисунок 1.9 – Подключение JS Bootstrap

Содержимое страницы включает в себя карту расположения офиса и контактная информация (смотреть рисунок 1.10).

 
Рисунок 1.10 – Страница «О нас»

1.3.3 Создание и подключение к базе данных

Для создания БД нам потребуется phpMyAdmin, расположенный во вкладке «Дополнительно» OpenServer. 
Нужно афторизоваться используя в качестве логина и пароля «root». Если введенные данные были корректны, то мы попадем на главную страницу phpMyAdmin, как показано на рисунке 1.11.


 
Рисунок 1.11 – Главная страница phpMyAdmin

Создадим новую БД, для этого в разделе «Базы данных» -> «Создать Базу данных», как показанно на рисунке 1.12, вводим её название и выбираем кодировку.

 
Рисунок 1.12 – Создание БД Kawasaki

Наша БД будет состоять из одной таблицы «moto» в разделе «Создать таблицу» (смотреть рисунок 1.13) вводим её название и кол-во столбцов (число столбцов позже можно увеличить по мере необходимости).

 
Рисунко 1.13 – Создание таблицы «moto»

Перейдем заполнению таблицы полями (рисунок 1.14). Им нужно задать следующие значение: имя, тип, длина, индекс и автоинкременция (в нашем случае последние две настройки применимы только для поля «id»).
Поля «Picture», т.е. «Изображение», будет хранить в себе ссылку на картину, так как нет возможности загрузить само изображение в базу данных.

 
Рисунок 1.14 – Создание полей в таблице

После заполнения таблицы всеми необходимыми полями, можем увидеть структуру нашей БД (смотреть рисунок 1.15). После заполнения таблицы, предоставиться возможность обозреть её структуру и содержимое (рисунок 1.16 – 1.17).

 
Рисунок 1.15 – Структура БД Kawasaki

 
Рисунок 1.16 – Структура таблицы «moto»


 
Рисункок 1.17 – Содержимое таблицы «moto» 

Далее нам необходимо подключиться к базе данных, для этого создадим файл dbconntent.php и заполним его следующим кодом (рисунок 1.18).

 
Рисунок 1.18 – Код подключения к БД

Этим кодом устанавливаем соедидение с сервером. Функция mysqli(), принимает четыре параметра: хост, логин, пароль, имя БД.
Если подключение к серверу невозможно, срабатывает исключение. 
1.3.4 Создание страницы «Каталог»

Данная страница отображает все мотоциклы, имеющиеся в БД. В свою очередь, они раздерены по типам и отображены в виде карточек.
Для начала требуется установить соединение с сервером, с помощью команды include(),  так же нам потребуется создать новый sql-запрос, как показано на рисунке 1.19.

 
Рисунок 1.19 – Подключение к серверу и создание sql-запроса

Мотоциклы отображаются в виде групп каточек. 
Код групп карточек состоит из контейнеров (<div class="container"> и <div class="card-deck" align="center">) и самих карточек, динамически создаваемых в цикле.
Так как имеются мотоциклы разных типов, было бы рзумнее выводить их по типам: «Дорожный», «Супер Спорт», «Круизёр». Для этого в цикле напишем условие, в этом условии проверятся значение поля type(тип). Если значение совпадает с требуемым, то генерируется карточка с конкретным мотоциклом. На рисунке 1.18 представлен код генерации карточек мотоциклов типа «Дорожный». 
 
Рисунок 1.20 – Генирация карточек по типу «Дорожный»

Аналогично создаются карточки других типов. (Листинг предотавлен в приложении А)
Страница принимает конечный вид, как показаны на рисунках (1.21 – 1.23) 

 
Рисунок 1.21 – Мотоциклы типа «Дорожный»

 
Рисунок 1.22 – Мотоциклы типа «Супер Спорт»

 
Рисунок 1.23 – Мотоциклы типа «Круизёр»

1.3.5 Создание страницы Мотоцикла

Так как мотоциклов может быть очень много, будет разумно создать единый шаблон для всех мотоциклов, содержание которого будет меняться от выбора конкретной модели.
Вернемся в cat.php (Каталог). В карточке мотоцикла имеется кнопка «Подробнее», по нажатию на которую осуществляется переход на страницу к выброаной модели. 
Потребуется определять индекс мотоцикла (поле «id») и шаблон по которому будем переходить. Требуется внести небольшие изменения в тэге <a>, как показанно на рисунке 1.24.

 
Рисунок 1.24 – Настройка перехода на страницу мотоцикла

Подключение страницы мотоцикла (moto.php) аналогично странице каталога (cat.php), за тем исключением, что sql-запрос будет обращаться к конкретной записи таблицы, за счёт передаваеиого значения столбца «id» (смотреть рисунок 1.25). 

 
Рисунок 1.25 - Полючение данных таблицы по id

Сама старница состоит из названия мотоцикла, картинки, описания и технических характеристик, выведенных в виде таблицы (смотреть рисунки 1.26 – 1.27).
Таблица содержит подробную инфрмацию о двигателе и трансмиссии мотоцикла, также имеется общая информация о годе выпуска, массе и объема бака. 

 
Рисунок 1.26 – Описание модели

 
Рисунок 1.27 – Таблица технических характеристик

Листинг предоставлен в Приложении Б.
 
1.3.6 Создание страницы «Главная»

Страница «Главная» отображает три модели мотоциклов по одному на каждый вид.
Вывод и отображение как на странице «Каталог», чтобы вывелся только один представитель каждого типа нужно оборвать цикл после первого выполненого условия (смотреть рисунок 1.28).

 
Рисунок 1.28 – Вывод представителя мотоциклов типа «Дорожный»

Аналогично создаётся код для других типов.
Так выгядит сраница в итоге (рисунок 1.29):

 
Рисункок 1.29 – Содержимое страницы «Главная» 
ЗАКЛЮЧЕНИЕ

В результате работы получился полностью рабочий сайт с базой данных, в которой фиксируется информация о мотоциклах. Изменять информацию может только администратор сайта. 
Всё поставленные задачи были достигнуты.
Сайт будет применяться для компании «Kawasaki». 	
В дальнейшем планируется внедрить регистрацию и авторизацию пользователей, также добавить возможность комментирования.





 
СПИСОК ИСПОЛЬЗОВАННЫХ ИСТОЧНИКОВ
1.	Руководство php [Электронный ресурс]
 https://www.php.net/manual/ru/
2.	Книга Дмитрий Владимирович Котеров - PHP 7. — СПб.: БХВ-Петербург, 2016. — 1088 с.
3.	Конструктор карт [Электронный ресурс] https://yandex.ru/map-constructor/
4.	Справочник по css [Электронный ресурс] http://htmlbook.ru/css
5.	Справочник по HTML [Электронный ресурс] https://html5book.ru/osnovy-html/
6.	Документация Boostrap [Электронный ресурс] https://bootstrap5.ru/docs/getting-started/introduction

 
ПРИЛОЖЕНИЕ А
Листинг страницы «Каталог» cat.php

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




 
ПРИЛОЖЕНИЕ Б
Листинг страницы мотоцикла moto.php:

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



