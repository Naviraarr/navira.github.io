<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "album_db";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn){
        die("Koneksi Gagal Terhubung".mysqli_connect_error());
    }
?>