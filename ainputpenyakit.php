<?php
include('session.php');
    session_start();
    if (!isset($_SESSION['username'])){
       echo "<script>window.alert('Anda Belum Login!')
        window.location='loginadmin.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="Js/jquery-2.2.3.min.js"></script>
  <script src="Js/bootstrap.min.js"></script>
  
    <script src="js/validator.js"></script>
    
    
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="homeadmin.php">BERANDA</a>
          </li>
          <li>
            <a href="hamadanpenyakit.php">HAMA & PENYAKIT</a>
          </li>
          <li>
            <a href="gejala.php">GEJALA</a>
          </li>
          <li>
            <a href="basispengetahuan.php">BASIS PENGETAHUAN</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="logout.php" id="myBtn">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container">
    <div class="col-sm-12 text-left">
        <h2 class="text-center">INPUT HAMA DAN PENYAKIT</h2>
      <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="ainputpenyakit.php">
          
          <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">ID Penyakit:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="idpenyakit" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
                
			</div>
			<div class="form-group has-feedback">
				<label class="control-label col-sm-2"  for="nama">Nama Penyakit:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="namapenyakit" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group ">
				<label class="control-label col-sm-2"  for="alamat">Jenis Tanaman:</label>
				<div class="col-sm-10">           
				<select class="form-control" name="jenistanaman" onChange='this.form.submit();'>
				<option>Tanaman</option>
                <option>Bawang</option>
                <option>Cabai</option>
  		        </select>
                    
                    
                    
				</div>
			</div>	
          <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Kultur Teknis:</label>
				<div class="col-sm-10">
                    <textarea rows='8' class="form-control" name="kulturteknis"></textarea>
				</div>
			</div>
          <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Fisik Mekanis:</label>
				<div class="col-sm-10">
                    <textarea rows='8' class="form-control" name="fisikmekanis"></textarea>
				</div>
			</div>
          <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Kimiawi:</label>
				<div class="col-sm-10">
                    <textarea rows='8' class="form-control" name="kimiawi"></textarea>
				</div>
			</div>
          <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Hayati:</label>
				<div class="col-sm-10">
                    <textarea rows='8' class="form-control" name="hayati"></textarea>
				</div>
			</div>
          <button type="submit" name ="submit" class="btn btn-primary">Simpan</button><br>
          <?php		
                    if(isset($_POST['submit'])){
                    
                    $idpenyakit     = $_POST['idpenyakit'];
                    $namapenyakit   = $_POST['namapenyakit'];
                    $jenistanaman   = $_POST['jenistanaman'];
                    $kulturteknis   = $_POST['kulturteknis'];
                    $fisikmekanis   = $_POST['fisikmekanis'];
                    $kimiawi        = $_POST['kimiawi'];
                    $hayati         = $_POST['hayati'];
                    $query="INSERT INTO penyakit SET idpenyakit='$idpenyakit',namapenyakit='$namapenyakit',jenistanaman='$jenistanaman',kulturteknis='$kulturteknis', fisikmekanis='$fisikmekanis',kimiawi='$kimiawi',hayati='$hayati'";
                   $result=mysqli_query($konek_db, $query);
                        if($result){
                            echo '<script language="javascript">';
                            echo 'alert("Data Berhasil disimpan")';
                            echo '</script>';
                            }
                    }
                ?>
		</form><br>
    </div>
  </div>
</div>


</div>
</body>
</html>
