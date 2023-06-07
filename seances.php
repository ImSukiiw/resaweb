<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cin'Air</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("connexion.php");
    $requete = "SELECT * FROM event, genres_films WHERE event.ext_genre = genres_films.id_genre";
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

<form method="GET" action="" class="map">
    <label for="genre">Trier par genre :</label>
    <select name="genre" id="genre">
        <option value="">Tous</option>
        <option value="Animation Japonaise" <?php if ($genreFiltre === 'Animation Japonaise') echo 'selected'; ?>>Animation Japonaise</option>
        <option value="Science-Fiction" <?php if ($genreFiltre === 'Science-Fiction') echo 'selected'; ?>>Science-Fiction</option>
        <option value="Disney" <?php if ($genreFiltre === 'Disney') echo 'selected'; ?>>Disney</option>
        <option value="Horreur" <?php if ($genreFiltre === 'Horreur') echo 'selected'; ?>>Horreur</option>
        <option value="Aventure" <?php if ($genreFiltre === 'Aventure') echo 'selected'; ?>>Aventure</option>
        <option value="Comedie" <?php if ($genreFiltre === 'Comedie') echo 'selected'; ?>>Comédie</option>
    </select>
    <button type="submit">Filtrer</button>
</form>
<div class=\"line-product\">
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
  <footer>
    <div class="footer-content">
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

</html>