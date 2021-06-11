<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoot The Ghost</title>
    <link rel="stylesheet" href="CSS/Game Style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body class="bground">
    <center><a href="Home.php" class="tombol-aktif animasi biru">Back</a></center>
    <h1>Shoot The Ghost</h1>
    
    <button type="button" class="play" onclick="start()">Play!</button>

    <h2 class="scoreboard">0</h2>

    <div class="container">
        <div class="building">
            <div class="ghost"></div>
        </div>
        <div class="building">
            <div class="ghost"></div>
        </div>
        <div class="building">
            <div class="ghost"></div>
        </div>
        <div class="building">
            <div class="ghost"></div>
        </div>
        <div class="building">
            <div class="ghost"></div>
        </div>
        <div class="building">
            <div class="ghost"></div>
        </div>
    </div>
    <audio src="Audio/SFX Pistol.mp3" id="sfxpistol"></audio>
    <script src="Javascript/Game.js"></script>
</body>
</html>