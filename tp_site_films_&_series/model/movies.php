<?php

require_once "../data/moviesArray.php";
require_once "../class/Movie.php";

// $dsn = "mysql:dbname=mds_php-approfondi;host=127.0.0.1;charset=utf8mb4";
// $pdo = new PDO($dsn, "mds_php-approfondi", "NL6Syr5R18fZbdao");
// $stmt = $pdo->query("SELECT * FROM movies");
// if (!$stmt) {
//   die('Erreur lors de la requête');
// }
// $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($movies as $movie) {
  $movie = new Movie($movie['id'], $movie['title'], $movie['poster_path'], $movie['original_title'], $movie['vote_average'], $movie['vote_count'], $movie['release_date'], $movie['overview']); ?>

  <div class="momort">
    <h3>
      <?php echo $movie->name; ?>
    </h3>
    <img src="https://image.tmdb.org/t/p/w500<?php echo $movie->img ?>" alt="Annonces : <?php echo $movie->name ?>" class="movimage">
    <a href="movie.php?movie=<?php echo $movie->id; ?>">Show more</a>
  </div>
<?php } ?>