<?php
    include "koneksi.php";
    session_start();

    $name = $_POST['gamename'];
    $info = $_POST['ket'];
    $img = addslashes(file_get_contents(basename($_POST['file'])));
    $idgame = $_POST['idgame'];

    $result = mysqli_query($connect, "update game set namagame = '$name', ket = '$info', gambar = '$img' where idgame=$idgame");
    if($result){
        header("location: homeforadmin.php");
    }
    else{
        echo mysqli_error($connect);
    }
?>