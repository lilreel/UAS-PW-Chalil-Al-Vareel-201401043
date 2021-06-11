<?php

if(isset($_POST['simpan']))
{
    include('connection.php');
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $alamat         = $_POST['alamat'];
    $update         = mysqli_query($connection, "update all_user set
    
    nama            = '$nama',
    jenis_kelamin   = '$jenis_kelamin',
    alamat          = '$alamat'

    where id        = '$id'")

    or die(mysqli_error($connection));

    if($update)
    {
        echo "<h2>Data Berhasil Diupdate</h2>";
        echo "<script>window.location = 'CRUD.php'</script>";
    }

    else
    {
        echo "<h2>Gagal Menyimpan Data</h2>";
        echo "<a href ='Edit.php ?id = ".$id."'>Kembali</a>";
    }
}

else
{
    echo "<script>window.history.back()</script>";
}
?>