<!DOCTYPE html>
<html lang="ru">
<head>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        $query = mysqli_query($con, "SELECT * FROM projects");
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
						<a href="arhiv.php" class="burger-menu__link">6 Архив </a>
						<a href="culture.php" class="burger-menu__link">7 Культура Якутии </a>
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
							<a href="projects.php" class="header__link impd1">Статьи</a>
						</li>
						<li class="header__item">
							<a href="login.php" class="header__link">Вход</a>
						</li>
					</ul>
				</nav>
			</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="intro">
			<div class="wrapper__intro">
				<div class="intro__text">
					<h1 class="intro__title" data-aos="flip-left">
						100 ЛЕТ ЯАССР
					</h1>
					<p data-aos="flip-left" class="intro__subtitle">
						27 апреля 2022 года Якутия отмечает 100-летие образования Якутской АССР.
					</p>
				</div>
				<div data-aos="flip-left" class="img__100">
					<img src="img/100.gif" class="img__intro">
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- service start -->
		<div class="wrapper">
			<h2 class="service__title section__title" data-aos="flip-left">
				Новости
			</h2>
			
			<div class="service__cards">
				<a style="text-decoration: 0;" href="news1.php">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/remember.png" style="width: 565px; height: 330" class="service__card__thumb">
					</div>
				</div>
				</a>
				<a style="text-decoration: 0;" href="news2.php">
				<div class="service__card">
					<div class="service__card__pic" style="margin-left: 60px;">
						<img src="img/bike.png" class="service__card__thumb">
						<p class="service__card__desc">
							Возложение цветов к памятнику Якутскому снайперу и мемориалу «СОЛДАТ ТУЙМААДЫ»
						</p>
					</div>
				</div>
				</a>
			</div>
			<div class="service__cards">
				<a style="text-decoration: 0;" href="news3.php">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/bus.png" class="service__card__thumb">
						<p class="service__card__desc">
							Якутяне участвовали в акции "Свеча памяти" в Якутске
						</p>
					</div>
				</div>
				</a>
				<a style="text-decoration: 0;" href="news4.php">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/usuah.png" class="service__card__thumb">
						<p class="service__card__desc">
							Арсен Томский стал выпускником Стэнфорда
						</p>
					</div>
				</div>
				</a>
				<a style="text-decoration: 0;" href="news5.php">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/lake.png" class="service__card__thumb">
						<p class="service__card__desc">
							Туристический маршрут «Путь Кулаковского» увековечит места, где жил и творил якутский писатель
						</p>
					</div>
				</div>
				</a>
			</div>
	<!-- service end -->
	<!-- new start -->
			<h2 class="service__title section__title">
				Новое
			</h2>
			<div class="new__cards">
				<?php 
			 		//цикл начинается
			 		for($i=0;$i< $query->num_rows ;$i++){
			 			$stroka = $query->fetch_assoc();
		 			?>
					<a class="new__link" style="text-decoration: 0;" href="<?php echo $stroka["link"];?>">
					<div class="new__card">
						<div class="new__card__pic">
							<img src="img/<?php echo $stroka["img"];?>" class="service__card__thumb">
							<p class="service__card__desc">
								<?php echo $stroka["name"];?>
							</p>
						</div>
					</div>
					</a>
					<?php 
						}
					?>
			</div>
			<h2 class="service__title section__title">
				Мероприятия
			</h2>
			<div class="service__cards">
				<a style="text-decoration: 0;" href="meet1.php">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/parad.png" class="service__card__thumb">
						<p class="service__card__desc">
							Парад 9 мая
						</p>
					</div>
				</div>
				</a>
			</div>
			<div class="wrapper_contacts">
				<div class="contact__info">
					<img data-aos="flip-left" src="img/Контакты.png" class="">
				</div>
			</div>
		</div>
	<!-- new end -->
	<!-- info start -->
		
		<div class="map">
          <a class="dg-widget-link" href="http://2gis.ru/yakutsk/firm/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Якутска</a><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/firm/7037402698858785/photos/7037402698858785/center/129.75309491157535,62.028111066440104/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/yakutsk/center/129.755657,62.029757/zoom/15/routeTab/rsType/bus/to/129.755657,62.029757╎Айыы Кыhата, Якутская национальная городская гимназия?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Айыы Кыhата, Якутская национальная городская гимназия</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":100 + '%',"height":215,"borderColor":"#a3a3a3","pos":{"lat":62.028111066440104,"lon":129.75309491157535,"zoom":15},"opt":{"city":"yakutsk"},"org":[{"id":"7037402698858785"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
	<!-- info end -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  		AOS.init();
	</script>
	<script type="text/javascript">
		let menu__btn = document.querySelector('.menu__btn')
		menu__btn.onclick = function(){

		}
	</script>
	</main>
</body>
</html>