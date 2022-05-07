<?php
	$password = md5($_POST['password']); // преобразуем пароль в его хеш
	$query = "INSERT INTO users SET login='$login', password='$password'";
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'final_hack'); 
	$text = "INSERT INTO users (id, name, surname, email, password, phone, img, district)  VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '$password', '{$_POST['phone']}', '{$_POST['img']}', '{$_POST['district']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: login.php");
?>