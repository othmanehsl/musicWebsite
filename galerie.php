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
  img#galerie {
  width: calc(33% - 6px);
  margin: 0;
  object-fit: cover;
  filter: grayscale(100%);
  transition: 0.5s ease;
}

img#galerie:hover {
  filter: grayscale(0%);
}

</style>

   <title>Galerie</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="css/styles.css">
  </head>
  <body>
    <div id="container">

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>
<div id="main">
<div>
</div>
<form id="galerie" action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
<label for="image">Put your favorite Album's cover</label>
<input type="file" name="image" id="image" /><br>
<input type="submit" value="Télécharger" />
</form>
<div class="images">
<?php
$nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
$dossier= opendir("images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}
$i=1; // On initialise i à 1
while($i <= $nbFichiers) {
    if($fichier!='.'&&$fichier!='..'){
    echo "<img id='galerie' src='images/galerie/image$i.jpg' alt=''>";
}
$i++;
}
?>
</div>
</div>

<div class="footer">
<?php
// Appel du Pied de Page
require ('footer.php');
?>
</div>

</div>
</body>
</html>