<div class="showort">
  <h3>
    <?php echo $shows[$i]['name']; ?>
  </h3>
  <img src="https://image.tmdb.org/t/p/w500<?php echo $shows[$i]['poster_path'] ?>" alt="Annonces : <?php echo $shows[$i]['name'] ?>" class="showimage">
  <a href="show.php?show=<?php echo $shows[$i]['id']; ?>">Show more</a>
</div>