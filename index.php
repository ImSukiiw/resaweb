<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cin'Air</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="./img/logo.png">
</head>

<body>
    <?php
    include("connexion.php");
    $requete = "SELECT * FROM event, genres_films WHERE event.ext_genre = genres_films.id_genre LIMIT 3";
    $stmt = $conn->query($requete);
    $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
    ?>
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
        <li><a href="index.php">Accueil</a></li>
        <li><a href="apropos.php">A propos</a></li>
        <li><a href="seances.php">Voir nos séances</a></li>
        <li><a href="mention.php">Mentions</a></li>
      </ul>
    </nav>
  </header>
  <section class="accueil"></section>
  <div class="slider">
    <img src="img/img1.jpg" alt="img1" class="img__slider active"/>
    <img src="img/img2.jpg" alt="img2" class="img__slider"/>
    <img src="img/img3.jpg" alt="img3" class="img__slider"/>
    <img src="img/img4.jpg" alt="img4" class="img__slider"/>
    <div class="suivant">
      <i class="fas fa-chevron-circle-right"></i>
    </div>
    <div class="precedent">
      <i class="fas fa-chevron-circle-left"></i>
    </div>
  </div>
  <div class="pres-product">
    <div class="line-product">
    <?php
if (isset($_GET['genre'])) {
    $genreFiltre = $_GET['genre'];
} else {
    $genreFiltre = '';
}

foreach ($resultat as $event) {
    if ($genreFiltre === '' || $event['genre_nom'] === $genreFiltre) {
        echo '<div class="product">';
        echo '<img src="./img/' . $event['image_event'] . '" alt="image event">';
        echo '<h2>' . $event['genre_nom'] . '</h2>';
        echo '<a href="product.php?id_event=' . $event['id_event'] . '"><br><button type="button" class="btn-res">Voir plus !</button></a>';
        echo '</div>';
    }
}
?>
    
    </div>
  </div>

  <footer class="footer-content">
      <div class="footer-info">
        <h4>Pages</h4><br>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="apropos.php">A propos</a></li>
          <li><a href="seances.php">Voir nos séances</a></li>
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
<script src="script.js"></script>
</html>