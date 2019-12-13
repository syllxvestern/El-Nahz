<?php
    include "koneksi.php";

    $name = $_POST['gamename'];
    $img = addslashes(file_get_contents($_FILES['file']));


    $result = mysqli_query($connect, "insert into game(namagame, gambar) values('$name', '$img')");

    
?>