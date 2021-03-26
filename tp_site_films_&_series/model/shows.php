<?php

require_once "../data/tvShowsArray.php";
require_once "../class/Show.php";

// $dsn = "mysql:dbname=mds_php-approfondi;host=127.0.0.1;charset=utf8mb4";
// $pdo = new PDO($dsn, "mds_php-approfondi", "NL6Syr5R18fZbdao");
// $stmt = $pdo->query("SELECT * FROM shows");
// if (!$stmt) {
//   die('Erreur lors de la requête');
// }
// $shows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($shows as $show) {
  $show = new Movie($show['id'], $show['name'], $show['poster_path'], $show['original_name'], $show['vote_average'], $show['vote_count'], $show['first_air_date'], $show['overview']); ?>

  <div class="showort">
    <h3>
      <?php echo $show->name; ?>
    </h3>
    <img src="https://image.tmdb.org/t/p/w500<?php echo $show->img ?>" alt="Annonces : <?php echo $show->name ?>" class="showimage">
    <a href="movie.php?movie=<?php echo $show->id; ?>">Show more</a>
  </div>

<?php } ?>