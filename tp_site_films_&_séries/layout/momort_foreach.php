<div class="momort">
  <h3>
    <?php echo $movie['title']; ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $movie['poster_path'] ?>" alt="Annonces : <?php echo $movie['title'] ?>" class="movimage">
  <a href="movie.php?movie=<?php echo $movie['id']; ?>">Show more</a>
</div>