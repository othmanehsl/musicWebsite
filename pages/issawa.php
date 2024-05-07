<!DOCTYPE html>
 <html>
  <head>
    <style>
      h2 {
    display: block;
    text-shadow: 0.35px 0.35px #fff;
    transition: all 0.3s ease-in-out;
    background-color: #282828;
    padding: 15px 20px;
    border-radius: 20px;
    border: 2px solid #fff;
    box-shadow: 0px 0px 10px #333;
  }
      .arrow {
  display: inline-block;
  transition: transform 0.2s ease-in-out;
  font-size: 1.1em;
    margin-left: 10px;
}
#title-1:hover, #title-2:hover, #title-3:hover, #title-4:hover {
  color: #0D7CFF;
  transform: scale(1.1);
}
#title-1:hover .arrow, #title-2:hover .arrow, #title-3:hover .arrow, #title-4:hover .arrow {
  transform: translateX(5px);
}

    </style>
   <title>Accueil</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type ="text/css" href="../css/styles.css">
   </head>
  <body>
  <header>
<a href="../index.php">
  <img src="../images/logo.png" alt="Logo" style="height:80px; transition: all 0.1s ease-in-out;" id="logo">
</a>
	<nav>
    	<ul>
            <li><a href="../donnees.php">Données</a></li>
            <li><a href="../galerie.php">Galerie</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../partenaires.php">Partenaires</a></li>
            <li><a href="../references.php">References</a></li>
        </ul>
     </nav>
</header>
<script>
  document.getElementById("logo").addEventListener("click", function() {
    this.style.transform = "scale(1.1)";
  });
</script>

<main>
  <h2 id="title-1">
    Said Berrada
    <span class="arrow arrow-1">▶</span>
  </h2>
  <div id="iframes-1" style="display: none;">
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6z69SVRZvlioMQRtG8arQM?utm_source=generator" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/77JMjZ7oahRj5vDpcVhHd5?utm_source=generator" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6eLbAQztwEUBeeccuoxcNE?utm_source=generator" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>
</main>
<script>
  const title1 = document.getElementById("title-1");
const iframes1 = document.getElementById("iframes-1");
const arrow1 = document.querySelector(".arrow-1");

title1.addEventListener("click", function() {
  if (iframes1.style.display === "none") {
    iframes1.style.display = "block";
    arrow1.style.transform = "rotate(90deg)";
  } else {
    iframes1.style.display = "none";
    arrow1.style.transform = "rotate(0deg)";
  }
});

</script>

