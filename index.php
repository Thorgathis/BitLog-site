<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>1BitLog</title>

		<link rel="icon" href="assets/images/favicon.png">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/fontello.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	</head>
	<body class="body-main">
		<div class="header">
			<div class="container">
				<div class="top">
					<div class="logo">
						<a href="">1BitLog</a>
					</div>

				</div>
				<div class="main">
					<div class="title">
						<h1>Мы ждём тебя, присоединяйся!</h1>
						<div class="info">
							<h2>Адрес: <span class="ip">mc.1bitlog.ru</span></h2><br>
							<?php
								$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/mc.1bitlog.ru'));

								if ($status->online === true){
									echo '<h2>Онлайн: ', $status->players->online, ' / ', $status->players->max, '<h2>';
								} else {
									echo '<h2>Сервер сейчас офлайн</h2>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="links">
					<div class="discord">
						<a href="https://discord.gg/dbuxEKvhUh" target="_blink">
							<img src="https://img.icons8.com/material-outlined/48/ffffff/discord.png"/><br>
							<small>Сообщество</small>
						</a>
					</div>
					<div class="donate">
						<a href="https://1bitlog.trademc.org/" target="_blink">
							<img src="https://img.icons8.com/material-sharp/48/ffffff/add-shopping-cart.png"/><br>
							<small>Донат</small>
						</a>
					</div>
					<div class="youtube">
						<a href="https://www.youtube.com" target="_blink">
							<img src="https://img.icons8.com/material-outlined/48/ffffff/youtube-play--v1.png"/><br>
							<small>Наш канал</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>