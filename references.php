<!DOCTYPE html>
 <html>
  <head>
    <style>
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
  #main h2 {
  font-size: 1.5em;
  margin-bottom: 10px;
}

#main a {
  font-size: 1.2em;
  margin-right: 20px;
  text-decoration: none;
  color: #0D7CFF;
}

#main a:hover {
  color: #FFF;
}
#main h2:first-of-type {
  margin-top: 0;
}
    </style>
   <title>Accueil</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="css/styles.css">
  </head>
  <body>
    <div id="container">

<?php
require ('header.php');
?>

<div id="main">
  <h2>Music:</h2>
  <a href="https://open.spotify.com/?" target="_blank"><u>Spotify</u></a>
  <h2>Images:</h2>
  <a href="https://www.pinterest.fr/" target="_blank"><u>Pinterest
  </u></a>
  <a href="https://images.google.com/" target="_blank"><u>Google Images</u></a>
</div>

<div class="footer">
<?php
require ('footer.php');
?>
</div>
</div>
</body>
</html>