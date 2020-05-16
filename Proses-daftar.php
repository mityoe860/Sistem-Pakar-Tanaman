<?php
  include "koneksi.php";
  $nama  = $_POST['nama'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

     
 $sql = mysqli_query($konek_db, "SELECT * FROM user WHERE username = '$username'");
  $result = mysqli_num_rows($sql);
  if ($result > 0) { 
    echo "<script>window.alert('Username yang anda masukan sudah ada')
      window.location='daftar.php'</script>"; }
      elseif (empty($username) || empty($password) || empty($jenis_kelamin) || empty($nama)) {
          echo "<script>window.alert('Data Tidak Boleh Ada Yang Kosong')
        window.location='daftar.php'</script>";
      }
       else {
        mysqli_query($konek_db, "INSERT INTO user VALUES ('$nama','$username','$password','$jenis_kelamin')");
        echo "<script>window.alert('DATA SUDAH DISIMPAN')
        window.location='index.php'</script>";
        }
      
 
?>