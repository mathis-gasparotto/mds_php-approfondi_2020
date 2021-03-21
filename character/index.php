<?php 

require_once 'Character.php';

include 'layout/header.php';

?>

<?php if (isset($_POST["character_create"])) { 

  $characters = [];

  if (isset($_POST["character1_name"]) && isset($_POST["character1_power"]) && !empty($_POST["character1_name"])) {
    $character1 = new Character(1, $_POST["character1_name"], $_POST["character1_power"]);
    $characters[] = $character1;
  } else {
    echo "First character's name is empty !";
  }

  if (isset($_POST["character2_name"]) && isset($_POST["character2_power"]) && !empty($_POST["character2_name"])) {
    $character2 = new Character(2, $_POST["character2_name"], $_POST["character2_power"]);
    $characters[] = $character2;
  } else {
    echo "First character's name is empty !";
  }

  include 'layout/character.php';

} ?>

<form action="" method="post">
  <label for="chararcter1_name">First character's name :</label>
  <input name="character1_name" id="character1_name" type="text" value="" />
  <label for="chararcter1_power">First character's power :</label>
  <input name="character1_power" id="character2_power" type="number" value="" />
  <label for="chararcter2_name">Second character's name :</label>
  <input name="character2_name" id="character1_name" type="text" value="" />
  <label for="chararcter2_power">Second character's power :</label>
  <input name="character2_power" id="character2_power" type="number" value="" />
  <input type="submit" name="character_create"></input>
</form>

 <?php include 'layout/footer.php'; ?>