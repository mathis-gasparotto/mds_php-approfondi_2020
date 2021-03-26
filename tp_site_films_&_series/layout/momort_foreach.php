<?php
$movie = new Movie($movie['id'], $movie['title'], $movie['poster_path'], $movie['original_title'], $movie['vote_average'], $movie['vote_count'], $movie['release_date'], $movie['overview']);
?>

<div class="momort">
  <h3>
    <?php echo $movie->getName(); ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $movie->getImg() ?>" alt="Annonces : <?php echo $movie->getName() ?>" class="movimage">
  <a href="movie.php?movie=<?php echo $movie->getId(); ?>">Show more</a>
</div>