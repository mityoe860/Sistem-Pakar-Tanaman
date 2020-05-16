<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pakar - Daftar</title>
	 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="Js/jquery-2.2.3.min.js"></script>
  <script src="Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Style2.css">
	
</head>
<body>
 

 
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan daftar</b></p>
        <form action="Proses-daftar.php" method="post">
		<form>
			<label>Nama</label>
			<input type="text" name="nama" class="form_login">
 
			<label>Username</label>
            <input type="text" name="username" class="form_login">
            
            <label>Password</label>
			<input type="password" name="password" class="form_login">

 
            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
          
			
 
			<br/>
			<br/>
			<center>
			<input type="submit" class="btn first" value="Daftar">
				<a class="btn first" href="index.php">Kembali</a>
			</center>
		</form>
		
	</div>
</body>
</html>