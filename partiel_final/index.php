<?php
include_once "layout/header.php";
require_once "layout/navbar.php";
require_once "layout/redirToLogin.php";
?>

<div class="content">
  <h1 class="title">Top of Games</h1>

  <h2 class="subtitle">Top 5</h2>

  <?php

  require_once "class/Game.php";

  try {

    require_once "utils/connectToDB.php";

    $stmt = $pdo->prepare("SELECT * FROM games");
    $stmt->execute();
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
    <div class="game-list"> <?php
                            for ($i = 0; $i < 5; $i++) {
                              require "layout/games-for.php";
                            } ?>
    </div>
</div>
<?php
  } catch (\PDOException $e) {
    echo 'Erreur avec PDO : ' . $e->getMessage();
  }


  include_once "layout/footer.php";
