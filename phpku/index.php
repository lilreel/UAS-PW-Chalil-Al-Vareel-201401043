<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header ("location:login.php");
	}
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	} 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css\styleisi.css">


    <title>SUperShop</title>
  </head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Economica:wght@700&display=swap');
    body{
        font-family: 'Economica', sans-serif;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SUperShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#location">Location</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Price List</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#biodata">Biodata</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#callcenter">Call center</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aksi_logout.php" tabindex="-1">Log Out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\gambar1_8x.jpg" class="d-block w-100" alt="Welcome to SUperShop">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;">Welcome to SUperShop</h5>
        <p style="color:black;">The #1 online shop in Banyak Island</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\gambar2_8x.jpg" class="d-block w-100" alt="Provide everything that the other online shop don't">
      <div class="carousel-caption d-none d-md-block">
        <h5>Provide everything that the other online shop don't</h5>
        <p>We provide more than what the other do because the shipment can't afford it everytime so we shoud provide more stuff and quantities</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\gambar3_8x.jpg" class="d-block w-100" alt="Well-Packaged<">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;"">Well-Packaged</h5>
        <p style="color:black;">We know that the Inter-Island shipment is tough, we also pack the stuff with double packaging for free.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="card-deck mt-5 mb-5">
        <div class="card">
            <img src="img\potokotak1.jpg" class="card-img-top" alt="Camera">
            <div class="card-body">
            <h5 class="card-title">Best DSLR Camera 2020</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 2 hours ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img\potokotak2.jpg" class="card-img-top" alt="Gadget">
            <div class="card-body">
            <h5 class="card-title">Best Flashdisk 2020</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 2 hours ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img\potokotak3.jpg" class="card-img-top" alt="Clothes">
            <div class="card-body">
            <h5 class="card-title">Best Clothes for Kids</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 2 hours ago</small></p>
            </div>
        </div>
    </div>
</div>

<div id="location" class="container">
    <table>  
        <thead>
            <tr>
                <td colspan="4" style="text-align: center;"><b>Location : </b></td>
            </tr>
        </thead>
    </table>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255167.28757766137!2d97.09510839097777!3d2.1579327198141627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3025231f5d753565%3A0x97d992ae9def991b!2sHaloban%2C%20Pulau%20Banyak%20Bar.%2C%20Kabupaten%20Aceh%20Singkil%2C%20Aceh!5e0!3m2!1sid!2sid!4v1620054110676!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<div id="biodata" class="container">
    <table class="table table-borderless table-dark table-hover mb-5 mt-5">
    <thead>
        <tr>
            <td colspan="4" style="text-align: center;"><b>BIODATA</b></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Name</th>
            <td>:</td>
            <td colspan="2">SUperShop</td>
        </tr>
        <tr>
            <th scope="row">Estabilished</th>
            <td>:</td>
            <td colspan="2">2021</td>
        </tr>
        <tr>
            <th scope="row"><Address>Adress</Address> </th>
            <td>:</td>
            <td colspan="2"><Address>Banyak Island</Address></td>
        </tr>
         <tr>
            <th id="callcenter" scope="row">Call Center</th>
            <td>:</td>
            <td colspan="2">(021)6565648796</td>
        </tr>
    </tbody>
    </table>
</div>

<footer class="text-center">
    <p>Soon we'll have the logo</p>
</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>