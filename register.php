<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/b612" rel="stylesheet">
	<title>Republic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<!-- header start -->
	<header class="header__main">
			<div class="header__wrapper">
				<div class="burger-menu">
					<a href="#" class="burger-menu__button">
						<span class="burger-menu__lines"></span>
					</a>
					<nav class="burger-menu__nav">
						<a href="attraction.php" class="burger-menu__link">1 Интересные места РС(Я) </a>
						<a href="person.php" class="burger-menu__link">2 Личности</a>
						<a href="kid_attractions.php" class="burger-menu__link">3 Достопримечательности</a>
						<a href="creative.php" class="burger-menu__link">4 Творчество</a>
						<a href="quests.php" class="burger-menu__link">5 Развлечения </a>
						<a href="culture.php" class="burger-menu__link">6 Культура Якутии </a>
						<a href="arhiv.php" class="burger-menu__link">7 Архив </a>
					</nav>
					<div class="burger-menu__overlay"></div>
					<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
					<script src="js/script.js"></script>
				</div>
				<div class="header__logo">
					<a href="main.php" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="info.php" class="header__link">Мероприятия</a>
						</li>
						<li class="header__item">
							<a href="districts.php" class="header__link impd1">Районы</a>
						</li>
						<li class="header__item">
							<a href="projects.php" class="header__link impd1">Проекты</a>
						</li>
						<li class="header__item">
							<a href="login.php" class="header__link">Вход</a>
						</li>
					</ul>
				</nav>
			</div>
	</header>
	<!-- header end -->
	<main class="main">
		<section class="login">
			<div class="wrapper__login">
				<div class="login__wrapper">
					<div class="login__text">
						<form action="add.php" method="POST">
							<h1 class="login__title">
								Регистрация
							</h1>
							<p class="login__subtitle">
								Ваше имя
							</p>
							<input class="login__input" type="" name="name" placeholder="Имя">
							<p class="login__subtitle">
								Ваша фамилия
							</p>
							<input class="login__input" type="" name="surname" placeholder="Фамилия">
							<p class="login__subtitle">
								Ваша почта
							</p>
							<input class="login__input" type="" name="email" placeholder="Почта">
							<p class="login__subtitle">
								Ваш пароль
							</p>
							<input class="login__input" type="password" name="password" placeholder="Пароль">
							<input style="display: none;" class="login__input" type="" name="phone" value="отсутствует">
							<input style="display: none;" class="login__input" type="" name="img" value="avatar-0.png">
							<input style="display: none;" class="login__input" type="" name="district" value="отсутствует">
							<div class="login__button__register">
								<button class="login__button_or">
									Зарегестрироваться
								</button>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</section>
	</main>
	<script type="text/javascript"></script>
	</main>
</body>
</html>