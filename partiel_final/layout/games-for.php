<?php
$game = new Game($games[$i]['game_id'], $games[$i]['name'], $games[$i]['img'], $games[$i]['description'], $games[$i]['rating']); ?>

<div class="game">
  <h3>
    <?php echo $game->getName(); ?>
  </h3>
  <img src="<?php echo $game->getImg() ?>" alt="<?php echo $game->getName() ?>" class="game-img">
  <a href="game.php?id=<?php echo $game->getId(); ?>">View details</a>
</div>