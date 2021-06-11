<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body class="bground">
    <div class="box">
        <h1 class="textlogin"><b>Login</b></h1>
        <form class="formbox" method="POST" action="login.php"> 
            <p style="font-family: 'Josefin Sans', sans-serif;"><b>Username</b></p>
            <input type="text" name="username" placeholder="Enter Username" class="userpass" style="font-family: 'Josefin Sans', sans-serif;">
            <p style="font-family: 'Josefin Sans', sans-serif;"><b>Password</b></p>
            <input type="password" name="password" placeholder="Enter Password" class="userpass" style="font-family: 'Josefin Sans', sans-serif;">
            <br>
            <input type="submit" name="" value="Login" class="loginbutton">
        </form>
    </div>
</body>
</html>