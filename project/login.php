<?php
    include "koneksi.php";
    $user = $_POST['email'];
    $pass = $_POST['password'];
 
    $result = mysqli_query($connect, "select email, password from user where email='$user' and password='$pass'");
    $cek = mysqli_num_rows($result);
    if($cek){
<<<<<<< HEAD
      session_start();
        $_SESSION['email'] = $row['email'];
=======
        session_start();
        $_SESSION['email'] = $user;
>>>>>>> 8243e508e7f3672ac8678ec02a103049a2148aa8
        header("Location: home.php?loginberhasil");

    }
    else{
        
        echo mysqli_error($connect);
    }
?>
<body>
    </html>