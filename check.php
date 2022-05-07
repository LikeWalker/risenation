<?php 
	session_start();//начинаем сессию пользователя
	$password = md5($_POST['password']); // преобразуем пароль в его хеш
	$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
	$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
	$query = mysqli_query($con, "SELECT * FROM users WHERE (email='{$_POST['email']}' AND password='$password')");
	$stroka = $query->fetch_assoc();
	$num = mysqli_num_rows($query);
	if($num>0){
		$_SESSION['id'] = $stroka['id'];// сохранили глобально ID пользователя который авторизовался
		$_SESSION['name'] = $stroka['name'];
		$_SESSION['surname'] = $stroka['surname'];
		$_SESSION['email'] = $stroka['email'];
		$_SESSION['password'] = $stroka['password'];
		header("Location: profile.php");
	} else{
		header("Location: login.php");
	}
?>
