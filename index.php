<?php
session_start();
if(isset($_SESSION['username'])){ 
  header("location: index.php"); 
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pakar - Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="Js/jquery-2.2.3.min.js"></script>
  <script src="Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Style2.css">
</head>
<body>
 

 
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan login</b></p>
        <form action="Proses-login.php" method="post">
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login">
 
			
 
		
			<center>
			<input type="submit" class="btn first" value="Masuk">
				<a class="btn first" href="daftar.php">Daftar</a>
					<a class="btn first" href="loginadmin.php">Login Admin</a>
			</center>
		</form>
		
	</div>
</body>
</html>