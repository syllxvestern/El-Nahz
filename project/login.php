<?php
    include "koneksi.php";
    session_start();
    $user = $_POST['email'];
    $pass = $_POST['password'];
 
    $result = mysqli_query($connect, "select email, password,level from user where email='$user' and password='$pass'");
    $cek = mysqli_num_rows($result);
    if($cek){
        $data = mysqli_fetch_assoc($result);
        if($data['level']=="admin"){

            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";

            header("location:homeforadmin.php?loginadminberhasil");
        }else{
            $_SESSION['email'] = $user;
            header("Location: home.php?loginuserberhasil");
        }

    }
    else{
        
        echo mysqli_error($connect);
    }
?>
<body>
    </html>