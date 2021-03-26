<?php include_once "layout/header.php"; ?>

<?php foreach ($movies as $movie) {

  // $movie = new Movie($movie['id'], $movie['title'], $movie['poster_path'], $movie['original_title'], $movie['vote_average'], $movie['vote_count'], $movie['release_date'], $movie['overview']);

  if ($_GET['movie'] == $movie['id']) { ?>
    <h3>
      <?php echo $movie['title']; ?>
    </h3>
    <img src="https://image.tmdb.org/t/p/w500<?php echo $movie['poster_path'] ?>" alt="Annonces : <?php echo $movie['title'] ?>" class="movimage">
    <h4>
      <?php if (isset($movie['original_title']) && !empty($movie['original_title'])) {
        echo "Original title : " . $movie['original_title'];
      } ?>
    </h4>
    <h4>
      <?php if (isset($movie['vote_average']) && !empty($movie['vote_average'])) {
        echo "Vote average : " . $movie['vote_average'] * 10 . " %";
        if (isset($movie['vote_count']) && !empty($movie['vote_count'])) {
          echo " (" . $movie['vote_count'] . ")";
        }
      } ?>
    </h4>
    <h5>
      <?php if (isset($movie['release_date']) && !empty($movie['release_date'])) {
        echo "Release date : " . $movie['release_date'];
      } ?>
    </h5>
    <p>
      <?php if (isset($movie['overview']) && !empty($movie['overview'])) {
        echo "Overview : " . $movie['overview'];
      } ?>
    </p>
<?php }
} ?>

<?php include_once "layout/footer.php"; ?>