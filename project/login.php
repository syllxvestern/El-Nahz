<?php
    include "koneksi.php";
    $user = $_POST['email'];
    $pass = $_POST['password'];
 
    $result = mysqli_query($connect, "select email, password from user where email='$user' and password='$pass'");
    $cek = mysqli_num_rows($result);
    if($cek){
      session_start();
        $_SESSION['email'] = $row['email'];
        header("Location: home.php?loginberhasil");

    }
    else{
        
        echo mysqli_error($connect);
    }
?>
<body>
    </html>