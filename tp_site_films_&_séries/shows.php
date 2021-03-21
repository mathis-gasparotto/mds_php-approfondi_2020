<?php include_once "layout/header.php"; ?>

<h2 class="page-title">TV Shows</h2>

<div id="momort_content">
  <?php foreach ($shows as $show) {
    require "layout/showort_foreach.php";
  } ?>
</div>

<?php include_once "layout/footer.php"; ?>