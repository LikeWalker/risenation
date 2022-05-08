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
					Туристический маршрут «Путь Кулаковского» увековечит места, где жил и творил якутский писатель

				</h2>
			</div>
			<div class="project_wrapper">
				<p class="project_text">
					В Якутии жители Качикатского наслега Хангаласского района инициировали создание туристического маршрута «Путь Кулаковского». Идею озвучили главе Якутии во время недавней прямой линии и Айсен Николаев поддержал создание маршрута. О перспективах, важности и туристическом потенциале проекта рассказали в Агентстве развития туризма и территориального маркетинга Якутии, а также руководитель Николаев центра Юрий Семенов. 
					Во время недавней прямой линии главы Якутии Айсена Николаева поступил звонок от жительницы 
					села Качикатцы, которая рассказала, что туристический маршрут «Путь Кулаковского» планируется организовать по местам, где жил и творил основоположник якутской литературы Алексей Кулаковский. Тогда она попросила главу республики поддержать проект.
					«Жизненный путь Алексея Кулаковского требует изучения и популяризации. То, что вы решили сделать туристический маршрут в Хангаласском районе, в Качикатцах, где создан ряд его бессмертных произведений, ничего кроме поддержки у меня не вызывает, это замечательно», — сказал тогда глава республики.
					Начальник отдела развития туризма Агентства развития туризма и территориального маркетинга Якутии Аркадий Ксенофонтов отметил вовлеченность самих жителей наслега в развитие туризма.
						Руководитель Николаев центра Юрий Семенов в комментарии ЯСИА отметил духовную важность создания «Пути Кулаковского».
						Туристический маршрут «Путь Кулаковского» раскрывает места туристам, где были написаны известные произведения, в том числе «Письмо якутской интеллигенции» писателя, поэта и основоположника якутской литературы Алексея Елисеевича Кулаковского – Өксөкүлээх Өлөксөй. Маршрут увековечит, расскажет о местах, где жил и творил Алексей Кулаковский.
					Маршрут имеет возможности в будущем для расширения социокультурной программы туристов наслега и улуса в целом, с посещением близлежащих известных туристских аттракторов — ледника Булуус, водопадов Курулуур, этнокомплекса «Самартай» и комплекса «Турук-Хая».
						На данный момент в Хангаласском улусе реализуется 81 турмаршрут — из них 15 экскурсий, 15 туров выходного дня, 4 круиза, 20 водных сплавов, 7 экстремальных и 20 комбинированных туров.

				</p>
				<iframe style="margin-top: 5%;" width="100%" height="505" src="<?php echo $stroka['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	<!-- intro end -->
	</main>
</body>
</html>