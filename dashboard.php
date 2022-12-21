<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('connection.php');
	$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Quan ly Sinh Vien</title>
</head>
<body>
	<h1>Danh sach diem sinh vien</h1>
	<a href="logout.php">Logout</a>
</body>
</html>