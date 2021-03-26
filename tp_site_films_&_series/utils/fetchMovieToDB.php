<?php
require_once "data/moviesArray.php";

$dsn = "mysql:dbname=mds_php_approfondi;host=127.0.0.1;charset=utf8mb4";
try {

  $i = 0;

  foreach ($movies as $movie) {
    $pdo = new PDO($dsn, "mds_php-approfondi", "NL6Syr5R18fZbdao");
    $stmt = $pdo->prepare("SELECT * FROM movies WHERE tmbd_id = ?");
    $stmt->execute([$movie['id']]);
    if (!($stmt->fetch())) {
      $stmt = $pdo->prepare("INSERT INTO `movies`(`tmbd_id`, `name`, `img`, `original_name`, `vote_average`, `vote_count`, `date`, `overview`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bindParam(1, $movie['id']);
      $stmt->bindParam(2, $movie['title']);
      $stmt->bindParam(3, $movie['poster_path']);
      $stmt->bindParam(4, $movie['original_title']);
      $stmt->bindParam(5, $movie['vote_average']);
      $stmt->bindParam(6, $movie['vote_count']);
      $stmt->bindParam(7, $movie['release_date']);
      $stmt->bindParam(8, $movie['overview']);
      $stmt->execute();
      $i++;
    }
  }
} catch (PDOException $e) {
  echo 'Erreur lors de la connexion : ' . $e->getMessage();
}
echo "imported movies : " . $i;
