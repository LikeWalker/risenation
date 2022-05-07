<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'final_hack'); 
	$text = "INSERT INTO projects (id, name, category, yt__link, description, district, img, no, link) VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['category']}', '{$_POST['yt__link']}', '{$_POST['description']}', '{$_POST['district']}', '{$_POST['img']}', '{$_POST['no']}', '{$_POST['link']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: kid_attractions.php");
?>