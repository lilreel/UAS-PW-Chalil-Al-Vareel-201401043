<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="CSS/CRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body class="bground">
    <center><a href="Home.php" class="tombol-aktif animasi biru" style="text-decoration: none;">Back</a></center>
    <div class="box" style="margin-top: 100px;">
        <h1 class="textlogin"><b>CRUD</b></h1>
        <a href="Tambah.php" class="loginbutton" style="color: #3498DB; text-decoration: none;"><h4>Tambah Data User</h4></a>
        <table style="border: 1px solid black;" class="tablestyle">
            <thead style="border: 1px solid black; text-align: center;">
                <th style="border: 1px solid black;">No</th>
                <th style="border: 1px solid black;">Id</th>
                <th style="border: 1px solid black;">Nama</th>
                <th style="border: 1px solid black;">Jenis Kelamin</th>
                <th style="border: 1px solid black;">Alamat</th>
                <th style="border: 1px solid black;">Opsi</th>
            </thead>

            <?php
                include_once 'connection.php';
                $no=1;
                $data=mysqli_query($connection, "select * from all_user");
                while ($d=mysqli_fetch_array($data)){
            ?>
                <tr style="text-align: left;">
                    <td style="border: 1px solid black;"><?php echo $no++; ?></td>
                    <td style="border: 1px solid black;"><?php echo $d['id']; ?></td>
                    <td style="border: 1px solid black;"><?php echo $d['nama']; ?></td>
                    <td style="border: 1px solid black;"><?php echo $d['jenis_kelamin']; ?></td>
                    <td style="border: 1px solid black;"><?php echo $d['alamat']; ?></td>
                    <td style="border: 1px solid black;">
                        <a href="Edit.php ?id=<?php echo $d['id'];?>" style="text-decoration: none;"><b>Edit</b></a>
                        <a href="Hapus.php ?id=<?php echo $d['id'];?>" style="text-decoration: none;"><b>Hapus</b></a>
                    </td>
                </tr>
            <?php    
            }
            ?>
        </table>
    </div>
</body>
</html>