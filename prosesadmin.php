<?php
    session_start();
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        $sql = mysqli_query($konek_db, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $data = mysqli_fetch_array($sql);
        $result = mysqli_num_rows($sql);
        if ($result) {
            $_SESSION['username'] = "admin"; 
            $_SESSION['nama'] = "admin";
            echo "<script>window.alert('Login Berhasil')
            window.location='homeadmin.php'</script>";
           
        } else {
            echo "<script>window.alert('Username Atau Password Salah')
            window.location='loginadmin.php'</script>";
                }
    } else {
        echo "<script>window.alert('Username atau Passsword Kosong, Harap di isi!')
        window.location='loginadmin.php'</script>";
    }
?>