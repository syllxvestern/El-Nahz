<?php
    include "koneksi.php";

    $name = $_POST['gamename'];
    // echo $_FILES['file']['name'];
    $img = addslashes (file_get_contents($_FILES['tfile']['tmp_name']));
    $ket = $_POST['ket'];
    // $image = base64_encode($img);

    // if(isset($_FILES['file']['name'])){
    //     echo $_FILES['file']['name'];
    // }
    // else{
    //     echo $_POST['file'];
    // }

    $result = mysqli_query($connect, "insert into game(namagame, gambar, ket) values('$name', '$img', '$ket')");

    if($result){
        header("location: homeforadmin.php");
    }
?>