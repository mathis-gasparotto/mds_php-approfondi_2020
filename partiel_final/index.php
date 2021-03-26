<?php
include_once "layout/header.php";
require_once "layout/navbar.php";
require_once "layout/redirToLogin.php";
?>

<h1>Top of Games</h1>

<h2>Top 5</h2>

<?php

require_once "class/Game.php";

try {

  require_once "utils/connectToDB.php";

  $stmt = $pdo->prepare("SELECT * FROM games");
  $stmt->execute();
  $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

  for ($i = 0; $i < 5; $i++) {

    require "layout/games-for.php";
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}

echo $_SESSION['connected'];

include_once "layout/footer.php";
