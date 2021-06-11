<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="CSS/CRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body class="bground">
    <?php
        include('Connection.php');
        $id = $_GET['id'];
        $show = mysqli_query($connection, "select * from all_user where id = '$id'");
        if(mysqli_num_rows($show) == 0)
        {
            echo '<script>window.history.back()</script>';
        }
        else
        {
            $d = mysqli_fetch_assoc($show);
        }
    ?>

    <form action="Edit Proses.php" method="POST" class="tablebox">
        <h1 class="textlogin">EDIT</h1>
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table class="tablestyle">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="33" value="<?php echo $d['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">Pilih</option>
                        <option value="Laki-Laki" <?php if($d['jenis_kelamin'] == 'Laki-Laki'){echo 'selected';} ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if($d['jenis_kelamin'] == 'Perempuan'){echo 'selected';} ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" size="33" value="<?php echo $d['alamat']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan" class="loginbutton" style="margin-top: 10px; text-align: center;"></td>
            </tr>
        </table>
    </form>
</body>
</html>