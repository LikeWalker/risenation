<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i" rel="stylesheet">
	<title>Republic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
	$query = mysqli_query($con, "SELECT * FROM places");
	?>
	<!-- header start -->
	<header class="header">
			<div class="header__wrapper">
				<div class="header__menu">
					<a href="main.php" class="header__logo-link">
						<img src="img/menu.png" class="header__logo-link-picture">
						</img>
					</a>
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
							<a href="" class="header__link impd1">Районы</a>
						</li>
						<li class="header__item">
							<a href="" class="header__link impd1">Проекты</a>
						</li>
						<li class="header__item">
							<a href="login.php" class="header__link">Вход</a>
						</li>
					</ul>
				</nav>
			</div>
	</header>
	<!-- header end -->
	<!-- attraction start -->
	<main class="main">
	<div class="wrapper" style="margin-bottom: 10%;">
		<h2 class="places__title section__title">
			Интересные места республики Саха (Якутия) 
		</h2>
		<?php 
	 		//цикл начинается
	 		for($i=0;$i< $query->num_rows ;$i++){
	 			$stroka = $query->fetch_assoc();
	 	?>
		<h2 class="places2__title section__title">
			<?php echo $stroka["name"];?>
		</h2>
		<div class="places__cards">
			<div class="service__card">
				<div class="places__card__pic">
					<img src="<?php echo $stroka["img"];
				?>" class="">
				</div>
			</div>
			<div class="service__card">
				<div class="service__card__pic" style="margin-left: 24px;">
					<p class="places__card__desc">
						<?php echo $stroka["description"];?>
					</p>
				</div>
			</div>
		</div>
		<?php
	 		 } 
	 	?>
	</div>
	</main>
	<!-- attraction end -->
	<script type="text/javascript"></script>
	</main>
</body>
</html>