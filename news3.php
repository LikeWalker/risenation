<!DOCTYPE html>
<html lang="ru">
<head>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/b612" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<!-- service start -->
		<div class="wrapper_art">
	<!-- new start -->
			<div style="padding: 20px; display: flex; flex-wrap: wrap; align-items: flex-end;">
				<h2 class="service__title ">
					Якутяне участвовали в акции "Свеча памяти" в Якутске

				</h2>
			</div>
			<div class="project_wrapper">
				<p class="project_text">
					Якутяне присоединились к Всероссийской патриотической акции «Свеча памяти». Память воинов, защищавших Родину и отдавших за нее жизни, тружеников, ковавших победу в тылу, почтили более 10 тысяч гостей и жителей столицы республики сегодня, 7 мая, на площади Победы, сообщает ЯСИА.
					В преддверии Дня Победы тысячи представителей молодёжи и старшего поколения собрались впервые за два года на площади Победы, чтобы почтить память воинов, защищавших Родину, многие из которых пали на поле брани и не 
					вернулись к своим родным, и тружеников, ковавших победу в тылу.
					Участники патриотической акции почтили минутой молчания память героев, павших в Великой Отечественной войне, и сложили свечами слово «Помним» перед главной стелой площади Победы.
					В акции приняли участие первый заместитель Председателя Государственного Собрания (Ил Тумэн) Республики Саха (Якутия) Виктор Губарев, министр по делам молодежи и социальным коммуникациям Республики Саха (Якутия) Петр Шамаев, глава городского округа «город Якутска» Евгений Григорьев, председатель Якутской городской Думы Альберт Семенов, ветеран тыла, кавалер Ордена «Полярная звезда», Почетный председатель республиканского Совета ветеранов Будимир Слепцов, представители органов федеральной исполнительной власти, молодёжь, учащиеся образовательных учреждений, жители и гости столицы.
					Впервые акция «Свеча памяти» состоялась в 2009 году в Санкт-Петербурге в дни празднования 65-й годовщины освобождения Ленинграда от фашистской блокады. Акция призвана сохранить память о погибших воинах и выразить благодарность защитникам Отечества.
					«Свеча памяти» – всероссийская акция, которая проводится накануне Дня Победы. В этот вечер все поколения объединяются и отдают дань памяти павшим воинам зажжением поминальных свеч.



				</p>
				<iframe style="margin-top: 5%;" width="100%" height="505" src="<?php echo $stroka['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	<!-- intro end -->
	</main>
</body>
</html>