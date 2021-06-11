<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
    <link rel="stylesheet" href="CSS/CRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<?php 
    if(isset($_GET['id'])){
        include('Connection.php');
        $id     = $_GET['id'];
        $cek    = mysqli_query($connection, "select id from all_user
        where id = '$id'") or die(mysqli_error($connection));

        if(mysqli_num_rows($cek)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($connection, "delete from all_user where id = '$id'");
            if ($del)
            {
                echo "<h2>Data Mahasiswa Berhasil Dihapus</h2>";
                echo "<script>window.location = 'CRUD.php';</script>";
            }
            else
            {
                echo "<h2>Gagal</h2>";
                echo "<a href = 'CRUD.php'>Kembali</a>";
            }
        }
    }

    else
    {
        echo "<script>window.history.back()</script>";
    }
?>

<body>
    
</body>
</html>