<div class="momort">
  <h3>
    <?php echo $movies[$i]['title']; ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $movies[$i]['poster_path'] ?>" alt="Annonces : <?php echo $movies[$i]['title'] ?>" class="movimage">
  <a href="movie.php?movie=<?php echo $movies[$i]['id']; ?>">Show more</a>
</div>