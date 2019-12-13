<?php
    include "koneksi.php";
    $id = $_POST['idgame'];


    $result = mysqli_query($connect, "delete from game where idgame = $id");
    header('Location: homeforadmin.php?deleteberhasil');
    
?>