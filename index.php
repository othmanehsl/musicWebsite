<!DOCTYPE html>
 <html>
  <head>
   <title>Accueil</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="css/styles.css">
   <style>
        .banner {
          padding: 12em 2em 12em 2em;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.55) 55%, rgba(255, 255, 255, 0)), url("images/choosen.png");
      background-size: cover;
    }
    h1 {
  color: #0D7CFF;
  margin-left: 380px;
  font-size: 96px;
  animation: type 2.3s steps(8);
  overflow: hidden;
  white-space: nowrap;
  font-family: consolas;
  border-right: 4px solid white;
  width: 8ch;
}
@keyframes type {
  0% {
    width: 0ch;
  }
  100% {
    width:8ch;
  }
}
.music {
position: relative;
display: inline-block;
}

.music img {
transition: all 0.2s ease-in-out;
}

.music img:hover {
box-shadow: 0 0 14px #fff;
transform: scale(1.05);
}

.music-text {
position: absolute;
bottom: 0;
left: 0;
right: 0;
font-size: 44px;
color: #fff;
text-align: center;
opacity: 0;
transition: all 0.2s ease-in-out;
padding: 10px 0;
background-color: rgba(0, 0, 0, 0.5);
}

.music:hover .music-text {
opacity: 1;
}
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
  }
  html, body {
    height: 100%;
  }
  #container {
    min-height: 100%;
    position: relative;
  }
  #main {
    overflow: auto;
    padding-bottom: 100px;
    width: 1080px;
  margin: 0 auto;
  }
  .footer {
    position: absolute;
    bottom: 0;
    height: 100px;
    width: 100%;
    text-align: center;
  }
   </style>
  </head>
  <body>
    <div id="container">
  <?php
require ('header.php');
?>
<section class="banner" id="banner">

</section><br><br>

 <div id="main">
 <h1>
   Welcome!
 </h1><br><br><br><br>
 <p style="font-size: 44px; margin-left:32px;"><u>The Best Of:</u></p>
 <div class="contenu">
  <a href="pages/rap.php" class="music">
    <img src="images/rap.jpg" height="532px" alt="">
    <p class="music-text">Rap</p>
  </a>
  <a href="pages/rai.php" class="music">
    <img src="images/rai.png" height="532px" alt="" style="margin-left: 6px;">
    <p class="music-text">Rai</p>
  </a>
  <a href="pages/andalousse.php" class="music">
    <img src="images/andalousse.png" height="532px" alt="" style="margin-left: 6px;">
    <p class="music-text">Andalousse</p>
  </a><br><br>
  <a href="pages/gnawa.php" class="music">
    <img src="images/gnawa.png" height="532px" alt="">
    <p class="music-text">Gnawa</p>
  </a>
  <a href="pages/issawa.php" class="music">
    <img src="images/issawa.png" height="532px" alt="" style="margin-left: 6px;">
    <p class="music-text">Issawa</p>
  </a>
  <a href="pages/nasheed.php" class="music">
    <img src="images/nasheed.png" height="532px" alt="" style="margin-left: 6px;">
    <p class="music-text">Nasheed</p>
  </a>
</div>

</div><br><br>

<div class="footer">
<?php
require ('footer.php');
?>
</div>
</div>

</body>
</html>
