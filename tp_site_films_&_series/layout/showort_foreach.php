<?php
$show = new Show($show['id'], $show['name'], $show['poster_path'], $show['original_name'], $show['vote_average'], $show['vote_count'], $show['first_air_date'], $show['overview']);
?>

<div class="showort">
  <h3>
    <?php echo $show->getname(); ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $show->getImg() ?>" alt="Annonces : <?php echo $show->getName() ?>" class="showimage">
  <a href="show.php?show=<?php echo $show->getId(); ?>">Show more</a>
</div>