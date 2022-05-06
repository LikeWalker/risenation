<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'final_hack'); 
	$text = "INSERT INTO users (id, name, surname, email, password, phone, district)  VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['phone']}', '{$_POST['district']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: login.php");
?>