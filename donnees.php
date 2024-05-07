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
    </style>
   <title>Données</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="css/styles.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div id="container">

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

   <div id="main">
   <table border=2 id="montableau" class="display" style="width:100%">
    <thead>
        <th>Chanson</th>
        <th>Artiste</th>
        <th>Année</th>
        <th>Durée</th>
        <th>Genre</th>
    </thead>
    <tbody>
    <?php
    // Déclaration du fichier et de son chemin dans une variable
    $fichier = 'datas/datas.json';

    // Lecture du fichier - On stocke le contenu dans une autre variable
    $tabFilmsJSON = file_get_contents($fichier);

    // Décodage du contenu du fichier et transformation en tablau php (array)
    $tabFilmsPHP = json_decode($tabFilmsJSON,true);
    foreach ($tabFilmsPHP as $film) {
        echo '<tr>';
        echo '<td>'.$film['Chanson'].'</td>'."\n";
        echo '<td>'.$film['Artiste'].'</td>'."\n";
        echo '<td>'.$film['Année'].'</td>'."\n";
        echo '<td>'.$film['Durée'].'</td>'."\n";
        echo '<td>'.$film['Genre'].'</td>'."\n";
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#montableau').DataTable({
        scrollY: '50vh',
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'
        }
    } );
} );
</script>
</div><br>

<div class="footer">
<?php
// Appel du Pied de Page
require ('footer.php');
?>
</div>

</div>
</body>
</html>