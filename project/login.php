<?php
    session_start();
    include('Connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($connection, "select * from user where username='$username' and password = '$password'");

    $cek = mysqli_num_rows($query);

    if ($cek == TRUE)
    {
        $_SESSION['username'] = $username;
        header ("location:home.php");
    }
?>