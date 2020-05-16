<?php
include('session.php');
    session_start();
    if (!isset($_SESSION['username'])){
       echo "<script>window.alert('Anda Belum Login!')
        window.location='index.php'</script>";
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
            <a href="home.php">BERANDA</a>
          </li>
          <li>
            <a href="diagnosa.php">DIAGNOSA PENYAKIT</a>
          </li>
          <li>
            <a href="daftarpenyakit.php">DAFTAR PENYAKIT</a>
          </li>
          <li>
            <a href="about.php">TENTANG</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
             <a href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-sm-2">
    <center>
      <h3>TUGAS <b>UAS</b></b></h3>
      <img src="img/lg.png" width="60%" alt="" srcset="">
      <hr>
      <hr>
      <div class="panel panel-danger">
        <div class="panel-heading">Dibuat Oleh :</div>
        <div class="panel-body text-left">
          RM Mirza Prasetyo<br>
          IF6SB<br>
          171420088<br>
        </div>
      </div>
  </div>
  </center>
  </div>
  <div class="container">
    <div class="col-sm-10 text-left">
      <center>
        <h2>ABOUT</h2>
      </center>
      <div class="panel panel-success">
        <div class="panel-heading">Introduce:</div>
        <div class="panel-body">
          <p>Di Indonesia tanaman bawang dan cabai adalah salah satu jenis tanaman hortikultura yang secara luas
            dibudidayakan. Akan tetapi, jika dilihat dari hasil panen yang dihasilkan masih belum memuaskan. Hal ini
            disebabkan oleh berbagai faktor, diantaranya yaitu teknik budidaya, kondisi lingkungan dan hama penyakit.
            Dari ketiga faktor, faktor yang paling bermasalah sampai saat ini adalah hama dan penyakit.Masalahnya sering
            ditemui bahwa petani yang minim akan pengetahuaan mengenai penyakit yang menyerang tanaman mereka, ditambah
            lagi keterbatasan seorang ahli kadang-kadang menjadi kendala bagi petani yang akan melakukan konsultasi
            untuk menyelesaikan masalah dan mendapatkan solusi terbaik. Diharapka sistem pakar simulasi diagnosa hama
            dan penyakit tanaman bawang dan cabai dibuat bertujuan untuk sebagai sarana konsultasi, sarana belajar di
            suatu instansi dan dapat digunakan sebagai alat yang digunakan untuk mendiagnosa dan mensosialisasikan jenis
            hama dan penyakit.</p>
            <center><a href="https://ghoulnime.blogspot.com" target="_blank" class="btn btn-danger">My Blog</a></center>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span
                class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $("#myBtn").click(function () {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>