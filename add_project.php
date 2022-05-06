<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'final_hack'); 
	$text = "INSERT INTO projects (id, name, category, s_description, description, district, img, no) VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['category']}', '{$_POST['s_description']}', '{$_POST['description']}', '{$_POST['district']}', '{$_POST['img']}', '{$_POST['no']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: profile.php");
?>