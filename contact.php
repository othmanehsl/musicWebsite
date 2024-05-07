<!DOCTYPE html>
 <html>
  <head>
   <title>Contact</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="css/styles.css">
   
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
    .form {
      margin-left: 390px;
    }
    #my_form {
        width: 300px;
    }
    .en-tete {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    #corps {
        display: block;
        margin-top: 10px;
    }
    #email {
      width: 300px;
    }
    #message {
      width: 300px;
    }
    .button {
        width: 300px;
        background-color: #0D7CFF;
        box-shadow: 2px 2px 10px #888888;
    }
    .button:hover {
        background-color: #006eec;
    }
    .button:active {
        transform: scale(0.95);
    }
    span {
        color: #0D7CFF
    }
    h1 {
      margin-left: 360px;
      color: #c6c6c7;
    }
    
</style>
  </head>
  <body>
<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<h1>Formulaire de contact</h1>
  <div class="form">
  <form action="traitements/envoi_mail.php" method="POST" id="my_form">
        <div class="en-tete">
            <div>
                <label for="prénom">Prénom<span>*</span></label>
                <input type="text" name="prenom" id="prénom" required style="width: 147.5px;">
            </div>
            <div>
                <label for="nom">Nom<span>*</span></label>
                <input type="text" name="nom" id="nom" required style="width: 147.5px;">
            </div>
        </div>
        <label for="email" id="corps">Email<span>*</span></label>
        <input type="email" name="email" id="email" required placeholder="nom@domaine.fr">

        <label for="message" id="corps">Message<span>*</span></label>
        <textarea name="message" id="message" placeholder="Votre message..." required></textarea>
        <input type="submit" class="button"><br><br><br>

        <p>Préciser votre demande:</p>
          <input type="radio" name="demande" id="Information" required>
          <label for="Information">Information</label><br>
          <input type="radio" name="demande" id="Demande de devis" required>
          <label for="Demande de devis">Demande de devis</label><br>
          <input type="radio" name="demande" id="Réclamation" required>
          <label for="Réclamation">Réclamation</label>
</form>
  </div>
</main>

<div class="footer">
<?php
// Appel du Pied de Page
require ('footer.php');
?>
</div>

</body>
</html>