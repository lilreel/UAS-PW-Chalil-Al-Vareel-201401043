<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>

<html>
<head>
    <title>Funny Place For Kids</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<style>
	img {
		float:left;
	}
</style>
<body>
    <div class="container">
        <div class="Menu">
            <ul>
                <li class="logo"><img src="Resources/Kiddo.png"></li>
                <li class="active"><a href="Home.php" class="tombol-aktif animasi biru">Home</a></li>
                <li><a href="HGame.php" class="tombol-aktif animasi biru">Games</a></li>
                <li><a href="About Me.php" class="tombol-aktif animasi biru">About Me</a></li>
                <li><a href="CRUD.php" class="tombol-aktif animasi biru">CRUD</a></li>
            </ul>
        </div>
        <div class="banner">
            <div class="app-text">
                <h1 style="font-family: 'Pacifico', cursive">Hey Parents...</h1>
                <p>Don't worry about your children<br>We will always do our best<br>And your son will be happy here</p>
            </div>
            <div class="app-video">
                <video autoplay muted><source src="Resources/Animasi.mp4"></video>
            </div>
			<div id="kartun"> <img src="Resources/People.png" width="20%" height="40%"> </div>
			<h1 style="font-family: 'Pacifico', cursive;">Have Fun, Kids!</h1>
		</div>
    </div>
    
</body>
</html>