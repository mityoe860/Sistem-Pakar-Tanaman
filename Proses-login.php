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
            $_SESSION['username'] = $data['username']; 
            $_SESSION['nama'] = $data['nama'];
            echo "<script>window.alert('Login Berhasil')
            window.location='home.php'</script>";
           
        } else {
            echo "<script>window.alert('Username Atau Password Salah')
            window.location='index.php'</script>";
                }
    } else {
        echo "<script>window.alert('Username atau Passsword Kosong, Harap di isi!')
        window.location='index.php'</script>";
    }
?>