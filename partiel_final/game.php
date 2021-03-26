<?php
include_once "layout/header.php";
require_once "layout/navbar.php";
require_once "layout/redirToLogin.php";
require_once "class/Game.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {

  try {

    require_once "utils/connectToDB.php";

    $stmt = $pdo->prepare("SELECT * FROM games WHERE game_id = ?");
    $stmt->execute([$_GET['id']]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$game) {
      die('Not game found');
    }
    $game = new Game($game['game_id'], $game['name'], $game['img'], $game['description'], $game['rating']); ?>

    <div class="game-content">
      <h1>
        <?php echo $game->getName(); ?>
      </h1>
      <img src="<?php echo $game->getImg() ?>" alt="<?php echo $game->getName() ?>" class="game-img">
      <p class="rating">Rating : <?php echo $game->getRating(); ?>/100</p>
      <p class="description">Resume : <?php echo $game->getDescription(); ?></p>
    </div>

<?php } catch (\PDOException $e) {
    echo 'Erreur avec PDO : ' . $e->getMessage();
  }
}

include_once "layout/footer.php";
