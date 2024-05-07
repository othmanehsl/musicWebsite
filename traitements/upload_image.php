<head>
  <title>Check</title>
  <link rel="stylesheet" type ="text/css" href="../css/styles.css">
  <style>
  </style>
</head>

<div id="container">

<header>
<a href="index.php">
  <img src="../images/logo.png" alt="Logo" style="height:80px; transition: all 0.1s ease-in-out;" id="logo">
</a>
	<nav>
    	<ul>
            <li><a href="../donnees.php">Données</a></li>
            <li><a href="../galerie.php">Galerie</a></li>
            <li><a href="../contact.php">Contact</a></li>

        </ul>
     </nav>
</header>
<script>
  document.getElementById("logo").addEventListener("click", function() {
    this.style.transform = "scale(1.1)";
  });
</script>
<script>
  document.getElementById("logo").addEventListener("click", function() {
    this.style.transform = "scale(1.1)";
  });
</script>
<div class="main">
<?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {
$image_nom=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_taille=$_FILES['image']['size'];
$image_temporaire=$_FILES['image']['tmp_name'];
$image_error=$_FILES['image']['error'];
} else {
echo 'Vous devez sélectionner un fichier';
}


// Début Vérification de la conformité
$affichage_erreurs='';
$erreurs=0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
    // Test format du fichier en fonction de l'extension
    if ($image_type != 'image/jpeg') {
        $affichage_erreurs .='Le fichier n\'est pas au format jpeg ou extension invalide<br>';
        $erreurs++;
    }

    // Test format du fichier avec la fonction exif_imagetype
    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .='Ce fichier n\'est pas une image jpeg<br>';
        $erreurs++;
    }

    // Test de la taille de l'image
    if ($image_taille > 500000) {
        $affichage_erreurs .='La taille de l\'image ne doit pas dépasser 500ko<br>';
        $erreurs++;
    }
} else {
    $affichage_erreurs='Impossible de télécharger le fichier, erreur de sélection<br>';
}

// On affiche les erreurs
if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Fichier conforme<br>';
}

if ($erreurs == 0) {                                    // Si fichier conforme
    // On récupére le nombre de fichiers dans images/galerie
$nbFichiers=-2;                                         // Le dossier contient deux fichier cachés . et ..
$dossier= opendir("../images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}

// On renomme le fichier - imageN.jpg
$image_num=$nbFichiers+1;
$image_nom='image'.$image_num.'.jpg';

// On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
$destination="../images/galerie/".$image_nom;

// On déplace le fichier dans son emplacement définitif
if (move_uploaded_file($image_temporaire, $destination)) {
$erreurs=0;
} else {
$affichage_erreurs='Erreur de téléchargement<br>';
$erreurs++;
}
}

// On affiche les erreurs
if ($erreurs != 0) {
echo $affichage_erreurs;
} else {
echo 'Téléchargement terminé avec succès<br>';
}
  // Détermination du message à affichée après les tentatives d'envoi
  $affichage_retour='Votre  image a bien été téléchargée';
    
  if ($erreurs != 0) {
  $affichage_retour='Echec de l\'envoi du message';
  }
?>
<div id="div_mail">
<?php
if ($erreurs == 0) {                                       // aucune erreur
echo '<div id="reussite">'."\n";
echo '<p>'.$affichage_retour.'</p>'."\n";
echo '<form action="../index.php">'."\n";
echo '<button type="submit">Retour</button>'."\n";        // on retourne sur la page accuei
echo '</form>'."\n";
echo '</div>'."\n";

} else {                                                  // Erreurs de saisie ou d'envoi du mail

echo '<div id="echec">'."\n";
echo '<p>'.$affichage_retour.'</p>'."\n";
echo '<form action="../galerie.php">'."\n";
echo '<button type="submit">Retour</button>'."\n";        // on retourne sur la page accueil
echo '</form>'."\n";
echo '</div>'."\n";
}
?>
</div>
</div>