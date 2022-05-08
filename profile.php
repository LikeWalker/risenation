<!DOCTYPE html>
<html lang="ru">
<head>
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
			<div class="wrapper__profile">
				<div class="profile__wrapper__img">
					<div class="profile__img">
						<h1 class="profile__title">
								Личный кабинет
						</h1>
						<div class="avatar-wrapper">
							<img class="profile-pic" src="uploads/<?php echo $stroka['img']?>" />
						</div>
						<form action="/uploaded.php" method="POST" enctype="multipart/form-data">
							<div class="profile__info">
								<h1 class="profile__info__human">Аватар:</h1> <input name="file" type="file" class="profile_upload_file ">
								<input name="avatar" type="submit" value="загрузить" class="profile_upload">
							</div>
						</form>
						<form action="redact_all.php" method="POST">	
							<div class="profile__info">
								<h1 class="profile__info__human">ФИ:</h1> <p class="profile__info__human2 pp_i_r1"><?php echo $stroka['name']?> &nbsp <?php echo $stroka['surname']?></p> <input class="profile__info__human i_p_i_r1" style="display: none;" type="" value="<?php echo $stroka['name']?>" name="name"><img class="profile__info__redact p_i_r1" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Почта:</h1> <p class="profile__info__human2 pp_i_r2"><?php echo $stroka['email']?></p> <input class="profile__info__human i_p_i_r2" style="display: none;" type="" value="<?php echo $stroka['email']?>" name="email"><img class="profile__info__redact p_i_r2" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Номер:</h1> <p class="profile__info__human2 pp_i_r3"><?php echo $stroka['phone']?></p> <input class="profile__info__human i_p_i_r3" style="display: none;" type="" value="<?php echo $stroka['phone']?>" name="phone"><img class="profile__info__redact p_i_r3" src="img/pencil.png">
							</div>
							<div class="profile__info">
								<h1 class="profile__info__human">Район:</h1> <p class="profile__info__human2 pp_i_r4"><?php echo $stroka['district']?></p><input class="profile__info__human i_p_i_r4" style="display: none;" type="" value="<?php echo $stroka['district']?>" name="district"> <img class="profile__info__redact p_i_r4" src="img/pencil.png">
							</div>
							<button class="p_i_r_btn login__button_or" style="display: none;">сохранить</button>
						</form>
					</div>
				</div>
			</div>
		</section>
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
	</main>
</body>
</html>