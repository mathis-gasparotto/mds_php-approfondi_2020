<?php include_once "layout/header.php"; ?>

<?php foreach ($shows as $show) {
  if ($_GET['show'] == $show['id']) { ?>
    <h3>
      <?php echo $show['name']; ?>
    </h3>
    <img src="https://image.tmdb.org/t/p/w500<?php echo $show['poster_path'] ?>" alt="Annonces : <?php echo $show['name'] ?>" class="movimage">
    <h4>
      <?php if (isset($show['original_name']) && !empty($show['original_name'])) {
        echo "Original title : " . $show['original_name'];
      } ?>
    </h4>
    <h4>
      <?php if (isset($show['vote_average']) && !empty($show['vote_average'])) {
        echo "Vote average : " . $show['vote_average'] * 10 . " %";
        if (isset($show['vote_count']) && !empty($show['vote_count'])) {
          echo " (" . $show['vote_count'] . ")";
        }
      } ?>
    </h4>
    <h5>
      <?php if (isset($show['first_air_date']) && !empty($show['first_air_date'])) {
        echo "First air date : " . $show['first_air_date'];
      } ?>
    </h5>
    <p>
      <?php if (isset($show['overview']) && !empty($show['overview'])) {
        echo "Overview : " . $show['overview'];
      } ?>
    </p>
<?php }
} ?>

<?php include_once "layout/footer.php"; ?>