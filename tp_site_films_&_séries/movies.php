<?php include_once "layout/header.php"; ?>

<h2 class="page-title">Movies</h2>

<div id="momort_content">
  <?php foreach ($movies as $movie) {
    require "layout/momort_foreach.php";
  } ?>
</div>

<?php include_once "layout/footer.php"; ?>