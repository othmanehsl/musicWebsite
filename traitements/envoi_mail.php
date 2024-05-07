<?php
// Vérification de l'appel via le formulaire
if (count($_POST)==0) {
  // Si le le tableau est vide, on affiche le formulaire
  header("location: ../contact.php");
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$message=$_POST['message'];
$demande=$_POST['demande'];
$email_dest=$_POST['email'];
$nom=ucfirst(mb_strtolower($nom));
$prenom=ucfirst(mb_strtolower($prenom));
$email='mmi22d15@mmi-troyes.fr';
$subject='Confirmation de votre demande sur SAE105';
$headers['From']=$email;              
$headers['Reply-to']='no-reply@mmi-troyes.fr';
$headers['MIME-Version'] = '1.0';
$headers['content-type'] = 'text/html; charset=utf-8';           
$message='Bonjour '.$prenom.' '.$nom.' .Nous avons bien pris en compte votre demande de ' .$demande.'.';
$message = "<html>
<head>
<title>$subject</title>
</head>
<body>
<h1 style='font-weight:bold'>Bonjour $nom $prenom</h1>
<p>Nous avons bien pris en compte votre demande de: <strong>$demande</strong></p>
<p>Merci de votre temps!</p>
</body>
</html>";
    
if (mail($email,$subject,$message,$headers,$demande)) {
echo "Mail de Contact OK";                  
}else {
echo "Erreur d'envoi du mail de contact";         
}
// Vérification des données du formulaire
// Exemple pour le nom

if (!empty($_POST['nom'])) {
  $nom=$_POST['nom'];
} else {
 header("location: ../contact.php");
}
if (!empty($_POST['email'])) {
  // Si le champ email contient des données
    // Verification du format de l'email
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $email=$_POST['email'];
    } else {
    // Si l'email est incorrect on retourne au formulaire  
       header("location: ../contact.php");
    }
// Si le champ email est vide, on retourne au formulaire     
} else {
 header("location: ../contact.php");
}

$affichage_retour= '';                            // Lignes à ajouter au début des vérifications
$erreurs=0;

// Exemple pour le nom
if (!empty($_POST['nom'])) {
  $nom=$_POST['nom'];
} else {
    // header('location: contact.php');                   // Ligne à remplacer
    $affichage_retour='Le champ NOM est obligatoire<br>';
    $erreurs++;
}


// Exemple pour l'adresse mail
if (!empty($_POST['email'])) {
// Si le champ email contient des données
  
    // Verification du format de l'email
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $email=$_POST['email'];
    } else {
    // Si l'email est incorrect 
    // header('location: contact.php');                   // Ligne à remplacer
    $affichage_retour='Adresse mail incorrecte';
    $erreurs++;
    }
        
// Si le champ email est vide
} else {
    // header('location: contact.php');                   // Ligne à remplacer
    $affichage_retour='Le champ EMAIL est obligatoire';
    $erreurs++;
}

if ($erreurs == 0) {

  // Préparation des données 

  //Envoi du mail de contact)
  if (mail($email_dest,$subject,$message,$headers,$demande)) {
  $erreurs=0;
  } else {
  $erreurs++;
  }
  
  // Préparation des données pour la confirmation

  //Envoi du mail de confirmation
  if (mail($email_dest,$subject,$message,$headers,$demande)) {
  $erreurs=0;
  } else {
  $erreurs++;
  }

  // Détermination du message à affichée après les tentatives d'envoi
    $affichage_retour='Votre demande à bien été envoyée';
    
    if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message';
    }
}
?>
<main>
<header>

  <nav>
    <div class="logo">
    <link rel="stylesheet" type ="text/css" href="../css/styles.css">
<a href="index.php"><img id="logo" src="../images/img2.png"/></a>
    </div>
      <ul>
          <li><a href="../index.php">Accueil</a></li>
            <li><a href="../donnees.php">Données</a></li>
            <li><a href="../galerie.php">Galerie</a></li>
            <li><a href="../contact.php">Contact</a></li>
        </ul>
     </nav>
</header>
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
echo '<form action="../contact.php">'."\n";
echo '<button type="submit">Retour</button>'."\n";        // on retourne sur la page accueil
echo '</form>'."\n";
echo '</div>'."\n";
}
?>
</div>
</main>
<?php
// Appel du Pied de Page
require ('../footer.php');
?>