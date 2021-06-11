<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "db_login";
    $connection = mysqli_connect($host, $user, $pass) or die ("Koneksi ke database gagal");
    mysqli_select_db($connection, $name);
?>