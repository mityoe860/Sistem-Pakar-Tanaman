<?php
include "koneksi.php";
session_start();// Starting Session // Storing Session

$user_check=$_SESSION['username'];
$sql="select * from user where username='$user_check'";
$ses=mysqli_query($konek_db,$sql);
$row =mysqli_fetch_assoc($ses);
$login_session =$row['nama'];

if(!isset($_SESSION)){
    echo"$user_check";
    
}

?>