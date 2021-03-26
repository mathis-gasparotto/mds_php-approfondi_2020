<?php
include_once "layout/header.php";
require_once "layout/redirToLogin.php";
?>

<h1>Games list</h1>

<?php


require_once "class/Game.php";

try {

  require_once "utils/connectToDB.php";

  $stmt = $pdo->prepare("SELECT * FROM games");
  $stmt->execute();
  $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($games as $game) {
    require "layout/games-foreach.php";
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}





include_once "layout/footer.php";
