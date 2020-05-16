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

<div class="container">
  <div class="col-sm-12 text-left">
    <center>
      <h2>DIAGNOSA PENYAKIT</h2>
    </center>
    <form id="form1" name="form1" method="post" action="diagnosa.php">
      <label for="sel1">Jenis Tanaman</label>
      <select class="form-control" name="tanaman" onChange='this.form.submit();'>
        <option>Tanaman</option>
        <option>Bawang</option>
        <option>Cabai</option>
      </select>
    </form>
    <br>
    <form id="form2" name="form2" method="post" action="diagnosa.php">
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                echo  "<br><label>AKAR</label><br>";
 			$tampil="select * from gejala where daerah='akar' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                       echo  "<br><label>BATANG</label><br>";
 			$tampil="select * from gejala where daerah='batang' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>

      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                     echo  "<br><label>DAUN</label><br>";
 			$tampil="select * from gejala where daerah='daun' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BUAH/UMBI</label><br>";
 			$tampil="select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BUNGA</label><br>";
 			$tampil="select * from gejala where daerah='bunga' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
                      echo  "<br><label>BIJI</label><br>";
 			$tampil="select * from gejala where daerah='biji' and jenistanaman= \"".$_POST['tanaman']."\"";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                  }
					?>

      <br>
      <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK
        PENYAKIT</button><br><br>
      <div class="panel panel-info">
        <div class="panel-heading">HASIL DIAGNOSA</div>
        <div class="panel-body">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ID PENYAKIT</th>
                  <th>Nama Penyakit</th>
                  <th>Jenis Tanaman</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <?php			
        if(isset($_POST['submit'])){
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = count($gejala);
           for($x=0;$x<$jumlah_dipilih;$x++){
                       $tampil ="select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                       $result = mysqli_query($konek_db, $tampil);
                       $hasil  = mysqli_fetch_array($result);   
                    
                    }
               echo "
                           <tr>  
        			             <td>".$x."</td>
                                 <td>".$hasil['idpenyakit']."</td>
					             <td>".$hasil['namapenyakit']."</td>  
                                 <td>".$hasil['jenistanaman']."</td> 
                                 <td><a href=\"hasildiagnosa.php?id=".$hasil['idpenyakit']."\"><i class='glyphicon glyphicon-search'></i></a></td>
        		          </tr>   
                               
                               ";
        }
    
                ?>
            </table>
          </div>
        </div>
      </div>
    </form>

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

  <script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
      $("#myBtn").click(function () {
        $("#myModal").modal();
      });
    });

    function checkDiagnosa() {
      return confirm('Apakah sudah benar gejalanya?');
    }
  </script>

</body>

</html>