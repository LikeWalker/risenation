<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
	$query = mysqli_query($con, "UPDATE users SET name='{$_POST['name']}', surname='{$_POST['surname']}', email='{$_POST['email']}', phone='{$_POST['phone']}', district='{$_POST['district']}' WHERE id='{$_SESSION['id']}'");
	header("Location: profile.php");
?>
