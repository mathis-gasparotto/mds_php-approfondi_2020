<div class="showort">
  <h3>
    <?php echo $show['name']; ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $show['poster_path'] ?>" alt="Annonces : <?php echo $show['name'] ?>" class="showimage">
  <a href="show.php?show=<?php echo $show['id']; ?>">Show more</a>
</div>