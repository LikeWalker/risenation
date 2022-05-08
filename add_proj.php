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
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
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
		<section class="profile">
			<div class="wrapper">
				<div class="profile__wrapper">
					<div class="profile__text">
						<form action="add_project.php" method="POST">
							<h1 class="login__title">
								Создать страницу
							</h1>
							<p class="login__subtitle">
								Название страницы
							</p>
							<input class="project__input" type="" name="name" placeholder="Название">
							<p class="login__subtitle">
								Тематика
							</p>
							<input class="project__input" type="" name="category" placeholder="Тематика">
							<p class="login__subtitle">
								Ссылка на YouTube
							</p>
							<input class="project__input" name="yt__link" placeholder="Ссылка на YouTube">
							<p class="login__subtitle">
								Описание 
							</p>
							<input class="project__input" name="description" placeholder="Описание">
							<input style="display: none;" type="" name="img" value="img/add.png">
							<p class="login__subtitle">
								Район
							</p>
							<input class="project__input" name="district" placeholder="Район">
							<p class="login__subtitle">
								Фото
							</p>
							<input class="project__input" type="" name="img" placeholder="Фото">
							<input style="display: none;" type="" name="no" value="no">
							<input style="display: none;" type="" name="link" value="project<?php echo $stroka['id']?>.php">
							<div class="login__button__register">
								<button class="login__button_or">
									Создать
								</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<!-- intro end -->
	<script type="text/javascript">
		let p_i_r1 = document.querySelector('.p_i_r1');
		let p_i_r2 = document.querySelector('.p_i_r2');
		let p_i_r3 = document.querySelector('.p_i_r3');
		let p_i_r4 = document.querySelector('.p_i_r4');
		let pp_i_r1 = document.querySelector('.pp_i_r1');
		let pp_i_r2 = document.querySelector('.pp_i_r2');
		let pp_i_r3 = document.querySelector('.pp_i_r3');
		let pp_i_r4 = document.querySelector('.pp_i_r4');
		let i_p_i_r1 = document.querySelector('.i_p_i_r1');
		let i_p_i_r2 = document.querySelector('.i_p_i_r2');
		let i_p_i_r3 = document.querySelector('.i_p_i_r3');
		let i_p_i_r4 = document.querySelector('.i_p_i_r4');
		let p_i_r_btn = document.querySelector('.p_i_r_btn');
		p_i_r1.onclick = function(){
			pp_i_r1.style.display = 'none';
			i_p_i_r1.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r2.onclick = function(){
			pp_i_r2.style.display = 'none';
			i_p_i_r2.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r3.onclick = function(){
			pp_i_r3.style.display = 'none';
			i_p_i_r3.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
		p_i_r4.onclick = function(){
			pp_i_r4.style.display = 'none';
			i_p_i_r4.style.display = 'block';
			p_i_r_btn.style.display = 'block';
		}
	</script>
</body>
</html>