<?php
require_once "layout/header.php";
?>

<?php
for ($i = 0; $i < 10; $i++) { ?>
    <?php require "layout/momort.php";
    ?>
<?php } ?>

<?php
for ($i = 0; $i < 10; $i++) { ?>
    <?php require "layout/showort.php";
    ?>
<?php } ?>




<?php
require_once "layout/footer.php" ?>