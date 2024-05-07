<header>
<a href="index.php">
  <img src="images/logo.png" alt="Logo" style="height:80px; transition: all 0.1s ease-in-out;" id="logo">
</a>
	<nav>
    	<ul>
            <li><a href="donnees.php">Données</a></li>
            <li><a href="galerie.php">Galerie</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
     </nav>
</header>
<script>
  document.getElementById("logo").addEventListener("click", function() {
    this.style.transform = "scale(1.1)";
  });
</script>