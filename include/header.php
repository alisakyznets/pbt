<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Demo 2021</title>
		<!-- подключение файла стилей -->
		<link rel="stylesheet" href="./css/style.css">
		<!-- подключение файлов скриптов -->
		<!-- для удобства скрипты вынесены в отдельные файлы -->
		<!-- скрипт носит имя файла в котором используется -->
		<script src="./script/index.js"></script>
		<script src="./script/personal-cabinet.js"></script>
		<script src="./script/admin.js"></script>
	</head>
	<body>
		<!-- logo сайта -->
		<div class="logo">
			<div class="content">
				<div class="img">
					<img src="logo/logo.png" alt="">
				</div>
				<div class="text">
					<h1>Сделаем лучше вместе!</h1>
					<h3>Добро пожаловать на городской портал! Здесь вы можете подавать заявки на улучшение вашего города и принимать активное участие в его развитии.</h3>
				</div>
			</div>
		</div>
		<header>
			<div class="content">
				<!-- подключение файла меню -->
				<?php include ("menu.php"); ?>
			</div>
		</header>
		<div class="message">
			<!-- вывод сообщений о действиях пользователя (в случае его наличия) -->
			<?php if (isset ($_GET["message"])) print ($_GET["message"]); ?>
		</div>