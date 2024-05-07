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
    Hamid El Kasri
    <span class="arrow arrow-1">▶</span>
  </h2>
  <div id="iframes-1" style="display: none;">
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5DbrFW9JN9I10x6YlN48Xv?utm_source=generator" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7nAzOMfGY0zuFmLuQLzKF5?utm_source=generator" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5I6nRs5JmzXxgfIZxUjTpU?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3rwooEaezEti3x3YbuedTf?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5wnzniAVAuhazJyTxu7hnD?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/48fH1ROqgxAKtqd7D52f2H?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>
<h2 id="title-2">
    Fehd Benchemsi
    <span class="arrow arrow-2">▶</span>
  </h2>
  <div id="iframes-2" style="display: none;">
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5tUsKspXvhtuEvIuzbKCpO?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4gjSADGyzMmvTPuW9nbbP4?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4bAIKHN6tMUrzaMHQsDc6k?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/390J5RtytGjkmQFyiqavIy?utm_source=generator&theme=0" width="50%" height="176" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
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

const title2 = document.getElementById("title-2");
const iframes2 = document.getElementById("iframes-2");
const arrow2 = document.querySelector(".arrow-2");

title2.addEventListener("click", function() {
  if (iframes2.style.display === "none") {
    iframes2.style.display = "block";
    arrow2.style.transform = "rotate(90deg)";
  } else {
    iframes2.style.display = "none";
    arrow2.style.transform = "rotate(0deg)";
  }
});
</script>
