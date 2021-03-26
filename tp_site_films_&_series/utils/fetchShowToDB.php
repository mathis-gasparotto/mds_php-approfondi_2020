<?php
require_once "data/tvShowsArray.php";

$dsn = "mysql:dbname=mds_php_approfondi;host=127.0.0.1;charset=utf8mb4";
try {

  $i = 0;

  foreach ($shows as $show) {
    $pdo = new PDO($dsn, "mds_php-approfondi", "NL6Syr5R18fZbdao");
    $stmt = $pdo->prepare("SELECT * FROM shows WHERE tsbd_id = ?");
    $stmt->execute([$show['id']]);
    if (!$stmt->fetch()) {
      $stmt = $pdo->prepare("INSERT INTO `shows`(`tsbd_id`, `name`, `img`, `original_name`, `vote_average`, `vote_count`, `date`, `overview`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bindParam(1, $show['id']);
      $stmt->bindParam(2, $show['name']);
      $stmt->bindParam(3, $show['poster_path']);
      $stmt->bindParam(4, $show['original_name']);
      $stmt->bindParam(5, $show['vote_average']);
      $stmt->bindParam(6, $show['vote_count']);
      $stmt->bindParam(7, $show['first_air_date']);
      $stmt->bindParam(8, $show['overview']);
      $stmt->execute();
      $i++;
    }
  }
} catch (PDOException $e) {
  echo 'Erreur lors de la connexion : ' . $e->getMessage();
}
echo "imported movies : " . $i;
