<?php
require_once "data/gamesArray.php";
require_once "utils/connectToDB.php";

try {

  $i = 0;

  foreach ($games as $game) {
    $stmt = $pdo->prepare("SELECT * FROM games WHERE game_id = ?");
    $stmt->execute([$game['id']]);
    if (!($stmt->fetch())) {
      $stmt = $pdo->prepare("INSERT INTO `games`(`game_id`, `img`, `name`, `rating`, `description`) VALUES (?, ?, ?, ?, ?)");
      $stmt->bindParam(1, $game['id']);
      $stmt->bindParam(2, $game['cover']);
      $stmt->bindParam(3, $game['name']);
      $stmt->bindParam(4, $game['rating']);
      $stmt->bindParam(5, $game['summary']);
      $stmt->execute();
      $i++;
    }
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}
echo "imported movies : " . $i;
