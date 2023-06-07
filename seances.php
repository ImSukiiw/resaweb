<?php 
include("connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cin'Air</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="./img/logo.png"/>
</head>

<body>
  <header>
    <nav>
      <a href="index.php" class="logo">
        <img src="./img/logo.png" alt="logo">
        <span class="txt-logo">Cin'Air</span>
      </a>

      </div>
      <div class="toggle">
        <i class="fas fa-bars ouvrir"></i>
        <i class="fas fa-times fermer"></i>
      </div>
      <ul class="menu">
        <input class="search" type="text" name="text" class="input" placeholder="Rechercher...">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="apropos.php">A propos</a></li>
        <li><a href="seances.php">Voir nos séances</a></li>
        <li><a href="info.php">Informations</a></li>
      </ul>
    </nav>
  </header>

  <footer>
    <div class="footer-content">
      <div class="footer-info">
        <h4>Pages</h4><br>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="apropos.php">A propos</a></li>
          <li><a href="seances.php">Voir nos séances</a></li>
          <li><a href="info.php">Informations</a></li>
        </ul>
      </div>
      <div class="footer-info">
        <h4>Besoin D'aide?</h4><br>
        <ul>
          <li><a href="mention.php">Mentions Légales</a></li>
        </ul>
      </div>
      <div class="footer-info">
        <h4>Cin'Air</h4><br>
        <ul>
          <li><a target="_blank" href="https://www.univ-gustave-eiffel.fr/">Siege Social : 2 Rue Albert Einstein, 77420 Champs-sur-Marne</a></li>
        </ul>
      </div>
  </footer>
</body>

</html>