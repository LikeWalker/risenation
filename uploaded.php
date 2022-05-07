<?php
	session_start();
?>
<?php
if(!empty($_FILES)){
	$file = $_FILES['file'];
	$fileName = $file['name'];
	$puthFile = __DIR__ . '/uploads/' .$fileName;
	move_uploaded_file($file['tmp_name'], $puthFile);
}
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','final_hack');
	$query = mysqli_query($con, "UPDATE users SET img='{$fileName}' WHERE id='{$_SESSION['id']}'");
	header("Location: profile.php");
?>
