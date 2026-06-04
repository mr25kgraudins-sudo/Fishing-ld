<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php"); exit();
    }
    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        header("location: index.php"); exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing LD</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <a href="?logout">Logout</a>
<div class="Virsraksts">
    <p>Fishing Leaderboard</p>
</div>

    <div class="hBrand">
        <p>Dārgie zīmogi</p>
    </div>

<div class="container">
        <div>Shimano</div>
    <div>Daiwa</div>
    <div>Abu Garcia</div>
  </div>

  <div class="images_1">
    <img src = "images/Ekrānuzņēmums 2026-05-19 131943.png" alt="one" width="600" height="300" class="brand1">
        <img src = "images/Ekrānuzņēmums 2026-05-19 140553.png" alt="one" width="600" height="300" class="brand2">
    <img src = "images/Ekrānuzņēmums 2026-05-19 140840.png" alt="one" width="600" height="300" class="brand3">
    </div>

<div class="Apraksts_1">
    <div>d1</div>
<div>d2</div>
    <div>d3</div>
    </div>

<div class="Intresanti_fakti">
<p>Intresanti Fakti</p>
    </div>
    <div>
<div class="aBrand">
<p>Izdevīgi zīmogi</p>
    </div>
    </div>

<div class="container2">
<div>KastKing</div>
    <div>Ugly Stik</div>
<div>Rapala</div>
</div>

<div class="images_2">
<img src = "images/Ekrānuzņēmums 2026-05-20 085639.png" alt="one" width="600" height="300" class="brand4">
<img src = "images/Ekrānuzņēmums 2026-05-20 085823.png"  alt="one" width="600" height="300" class="brand5">
    <img src = "images/Ekrānuzņēmums 2026-05-20 090020.png"  alt="one" width="600" height="300" class="brand6">
</div>

<div class="Apraksts_2">
    <div>d1</div>
<div>d2</div>
<div>d3</div>
    </div>

    <div>
    <div class="lBrand">
<p>Low Brand</p>
    </div>
    </div>

    <div class="container3">
<div>Piscifun</div>
    <div>Okuma</div>
<div>Plusinno</div>
    </div>

    <div class="images_3">
    <img src = "images/Ekrānuzņēmums 2026-05-20 103758.png"  width="600" height="300" class="brand7">
<img src = "images/Ekrānuzņēmums 2026-05-20 103845.png" width="600" height="300" class="brand8">
<img src = "images/Ekrānuzņēmums 2026-05-20 103941.png" width="600" height="300" class="brand9">
    </div>

<div class="Apraksts_3">
<div>d1</div>
    <div>d2</div>
<div>d3</div>
</div>

</body>
</html>