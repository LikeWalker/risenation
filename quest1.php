<!DOCTYPE html>
<html lang="ru">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
        $query = mysqli_query($con, "SELECT * FROM quests");
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
		<div class="wrapper_art">
			<div class="col-12">
				<h2 class="service__title ">
				Тест «Что вы знаете о Нюрбинском улусе?»
				</h2>
				<p class="project_text " style="margin-bottom: 3%;">
				Нюрбинский улус (район) – один из крупнейших промышленных, культурных и административных улусов республики. Административный центр – город Нюрба. Давайте узнаем, каковы ваши познания об истории, исторических персонах и личностях современности Нюрбинского улуса.
				</p>
				
				<!--Первый вопрос -->
				<div class="marvel1 col-10 pl-1 pr-1" style="margin-bottom: 3%;">
					<h1 class="text-left project_text">1. По мнению многих этнографов от какого племени якутов происходят нюрбинцы? </h1>
				<div class="col-10 text-left introduction3 falsemarvel1 test_text" >
					<p class="falsemarvel1 ">Намского</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel1 test_text">
					<p class="falsemarvel1 ">Усть-Алданского</p>
				</div>
				<div class="col-10 text-left introduction3 truemarvel1 test_text">
					<p class="truemarvel1">Хангаласского</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel1 test_text">
					<p class="falsemarvel1 ">Горного</p>
				</div>
				</div>
				<!--Второй вопрос -->
				<div class="marvel2 col-10 none none2 pl-1 pr-1">
					<h1 class="text-left project_text">2. Улус получил своё название?</h1>
					<div class="col-10 text-left introduction3 falsemarvel1 test_text" >
					<p class="falsemarvel2 ">От названия местности</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel2 test_text">
					<p class="falsemarvel2 ">От имени родоначальника</p>
				</div>
				<div class="col-10 text-left introduction3 truemarvel2 test_text">
					<p class="truemarvel2 ">От озера Нюрба</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel2 test_text">
					<p class="falsemarvel2 ">Неизвестно</p>
				</div>
				</div>
				<!--Третий вопрос -->
				<div class="marvel3 col-10 none none2 pl-1 pr-1">
					<h1 class="text-left project_text">3. Уроженец Нюрбинского района, Герой Советского Союза участник Великой Отечественной войны?</h1>
					<div class="col-10 text-left introduction3 falsemarvel3 test_text" >
					<p class="falsemarvel3 ">Охлопков Федор Матвеевич</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel3 test_text">
					<p class="falsemarvel3 ">Кондаков Николай Алексеевич</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel3 test_text">
					<p class="falsemarvel3 ">Максим Кирович Аммосов</p>
				</div>
				<div class="col-10 text-left introduction3 truemarvel3 test_text">
					<p class="truemarvel3 ">Чусовской Николай Николаевич</p>
				</div>
				</div>
				<!--4 вопрос -->
				<div class="marvel4 col-10 none none2 pl-1 pr-1">
					<h1 class="text-left project_text">4.	Заслуженный мастер спорта России, бронзовый призёр Олимпийских игр 2008 в Пекине, трёхкратный чемпион Европы и шестикратный чемпион России по боксу</h1>
					<div class="col-10 text-left introduction3 falsemarvel4 test_text" >
					<p class="falsemarvel4 ">Виктор Ефремов</p>
				</div>
				<div class="col-10 text-left introduction3 truemarvel4 test_text">
					<p class="truemarvel4 ">Георгий Балакшин</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel4 test_text">
					<p class="falsemarvel4 ">Александр Тыасытов</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel4 test_text">
					<p class="falsemarvel4 ">Василий Егоров</p>
				</div>
				</div>
				<!--5 вопрос -->
				<div class="marvel5 col-10 none none2 pl-1 pr-1">
					<h1 class="text-left project_text">5.	Сколько населенных пунктов в Нюрбинском районе? </h1>
					<div class="col-10 text-left introduction3 falsemarvel5 test_text" >
					<p class="falsemarvel5 ">16</p>
				</div>
				<div class="col-10 text-left introduction3 truemarvel5 test_text">
					<p class="truemarvel5 ">24</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel5 test_text">
					<p class="falsemarvel5 ">50</p>
				</div>
				<div class="col-10 text-left introduction3 falsemarvel5 test_text">
					<p class="falsemarvel5 ">27</p>
				</div>
				</div>
				<div class="col-10 mx-auto text-left introduction3 pl-1 marvel-introduction test_text">
					<p>Ты набрал <span class="score6"></span> балл/балла!</p>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript">
		let marvel1 = document.querySelector('.marvel1')
		let marvel2 = document.querySelector('.marvel2')
		let marvel3 = document.querySelector('.marvel3')
		let marvel4 = document.querySelector('.marvel4')
		let marvel5 = document.querySelector('.marvel5')
		let truemarvel1 = document.querySelector('.truemarvel1')
		let truemarvel2 = document.querySelector('.truemarvel2')
		let truemarvel3 = document.querySelector('.truemarvel3')
		let truemarvel4 = document.querySelector('.truemarvel4')
		let truemarvel5 = document.querySelector('.truemarvel5')
		let falsemarvel1 = document.querySelectorAll('.falsemarvel1')
		let falsemarvel2 = document.querySelectorAll('.falsemarvel2')
		let falsemarvel3 = document.querySelectorAll('.falsemarvel3')
		let falsemarvel4 = document.querySelectorAll('.falsemarvel4')
		let falsemarvel5 = document.querySelectorAll('.falsemarvel5')
		let marvelIntroduction = document.querySelector('.marvel-introduction');
		let marvelIntroduction2 = document.querySelector('.marvel-introduction2');
		let futuremarvel = document.querySelector('.future-marvel');
		let scores6 = document.querySelector('.score6');
		let yes6 = 1;
		let score6 = 0;
		let scorePoints6 = function(){
		score6 = score6 + yes6;
		scores6.innerHTML = score6;
		}
		let nonemarvel1 = function(){
			marvel1.style.display = "none";
			marvel2.style.display = "block";
		}
		let nonemarvel2 = function(){
			marvel2.style.display = "none";
			marvel3.style.display = "block";
		}
		let nonemarvel3 = function(){
			marvel3.style.display = "none";
			marvel4.style.display = "block";
		}
		let nonemarvel4 = function(){
			marvel4.style.display = "none";
			marvel5.style.display = "block";
		}
		let nonemarvel5 = function(){
			marvel5.style.display = "none";
		}
		let beatymarvel1 = function(){
			marvel2.style.opacity = 1;
			marvel2.style.transition = 2 + "s";
		}
		let beatymarvel2 = function(){
			marvel3.style.opacity = 1;
			marvel3.style.transition = 2 + "s";
		}
		let beatymarvel3 = function(){
			marvel4.style.opacity = 1;
			marvel4.style.transition = 2 + "s";
		}
		let beatymarvel4 = function(){
			marvel5.style.opacity = 1;
			marvel5.style.transition = 2 + "s";
		}
		let beatymarvel5 = function(){
			marvelIntroduction.style.display = "block";
		}
		truemarvel1.onclick = function(){
				marvel1.style.opacity = 0;
				marvel1.style.transition = 2.5 + "s";
				truemarvel1.style.color = "green";
				setTimeout(nonemarvel1, 2000);
				setTimeout(beatymarvel1, 2500);
				scorePoints6();
			}
			for( let i = 0; i < falsemarvel1.length; i++){
		   		falsemarvel1[i].onclick = function(){
		   			truemarvel1.style.color = "green";
		   			falsemarvel1[i].style.color = "red";
		   			marvel1.style.opacity = 0;
					marvel1.style.transition = 1.9 + "s";
					setTimeout(nonemarvel1, 2000);
					setTimeout(beatymarvel1, 2500);
		   		}
		 	}	
			truemarvel2.onclick = function(){
				marvel2.style.opacity = 0;
				marvel2.style.transition = 2.5 + "s";
				truemarvel2.style.color = "green";
				setTimeout(nonemarvel2, 2000);
				setTimeout(beatymarvel2, 2500);
				scorePoints6();
			}
			for( let i = 0; i < falsemarvel2.length; i++){
					falsemarvel2[i].onclick = function(){
			   			truemarvel2.style.color = "green";
			   			falsemarvel2[i].style.color = "red";
			   			marvel2.style.opacity = 0;
						marvel2.style.transition = 2.5 + "s";
						setTimeout(nonemarvel2, 2000);
						setTimeout(beatymarvel2, 2500);
			   		}
			}
			truemarvel3.onclick = function(){
				marvel3.style.opacity = 0;
				marvel3.style.transition = 2.5 + "s";
				truemarvel3.style.color = "green";
				setTimeout(nonemarvel3, 2000);
				setTimeout(beatymarvel3, 2500);
				scorePoints6();
			}
			for( let i = 0; i < falsemarvel3.length; i++){
					falsemarvel3[i].onclick = function(){
			   			truemarvel3.style.color = "green";
			   			falsemarvel3[i].style.color = "red";
			   			marvel3.style.opacity = 0;
						marvel3.style.transition = 2.5 + "s";
						setTimeout(nonemarvel3, 2000);
						setTimeout(beatymarvel3, 2500);
			   		}
			}
			truemarvel4.onclick = function(){
				marvel4.style.opacity = 0;
				marvel4.style.transition = 2.5 + "s";
				truemarvel4.style.color = "green";
				setTimeout(nonemarvel4, 2000);
				setTimeout(beatymarvel4, 2500);
				scorePoints6();
			}
			for( let i = 0; i < falsemarvel4.length; i++){
					falsemarvel4[i].onclick = function(){
			   			truemarvel4.style.color = "green";
			   			falsemarvel4[i].style.color = "red";
			   			marvel4.style.opacity = 0;
						marvel4.style.transition = 2.5 + "s";
						setTimeout(nonemarvel4, 2000);
						setTimeout(beatymarvel4, 2500);
			   		}
			}
			truemarvel5.onclick = function(){
				marvel5.style.opacity = 0;
				marvel5.style.transition = 2.5 + "s";
				truemarvel5.style.color = "green";
				setTimeout(nonemarvel5, 2000);
				setTimeout(beatymarvel5, 2500);
				scorePoints6();
			}
			for( let i = 0; i < falsemarvel5.length; i++){
					falsemarvel5[i].onclick = function(){
			   			truemarvel5.style.color = "green";
			   			falsemarvel5[i].style.color = "red";
			   			marvel5.style.opacity = 0;
						marvel5.style.transition = 2.5 + "s";
						setTimeout(nonemarvel5, 2000);
						setTimeout(beatymarvel5, 2500);
			   		}
			}
	</script>
</body>
</html>