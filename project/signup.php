<?php
    include "koneksi.php";

    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $result = mysqli_query($connect, "insert into user(username, email, password) values ('$user', '$email', '$pass')");
    if($result){
        header("location:home.php?pendaftaranberhasil");
    }
    else{
        mysqli_error($connect);
    }
?>