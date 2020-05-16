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
  <script>
    $(document).ready(function () {
      $('#example1').DataTable();
    });
  </script>
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
    <h2 class="text-center">BASIS PENGETAHUAN</h2>
    <form id="form1" name="form1" method="post" action="basispengetahuan.php">
      <label for="sel1">Jenis Tanaman</label>
      <select class="form-control" name="tanaman" onChange='this.form.submit();'>
        <option>Tanaman</option>
        <option>Bawang</option>
        <option>Cabai</option>
      </select>
    </form>
    <br>
    <a href="abasispengetahuan.php"><button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </button></a>
    <br><br>
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>Id Penyakit</th>
            <th>Nama Penyakit</th>
            <th>Gejala</th>
            <th>Detail</th>
          </tr>
        </thead>
        <?php
                    if(isset($_POST['tanaman']))
                    if($_POST['tanaman']!="jenistanaman"){
                            $queri="Select p.idpenyakit, p.jenistanaman, b.namapenyakit, b.gejala from basispengetahuan b, penyakit p where p.namapenyakit=b.namapenyakit and p.jenistanaman=\"".$_POST['tanaman']."\"";
                    $hasil=mysqli_query ($konek_db,$queri);   
                    $id = 0;
                        
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td>
					<td>".$data['idpenyakit']."</td>  
        			<td>".$data['namapenyakit']."</td>  
                    <td>".$data['gejala']."</td>
                    <td><a href=\"adeletebasispengetahuan.php?id=".$data['namapenyakit']."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a></td>
                   
        		</tr>   
        	";      
			
                    }
                }
 ?>
      </table><br><br><br><br><br>
    </div>
  </div>
  </div>
  </div>

  <script language="JavaScript" type="text/javascript">
    function checkDelete() {
      return confirm('Yakin menghapus data ini?');
    }
  </script>


</div>
</body>

</html>