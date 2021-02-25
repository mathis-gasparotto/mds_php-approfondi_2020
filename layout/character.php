<?php foreach($characters as $character) {?>
  
  <div class="character">

    <div class="name">Id : <?php echo $character->getId(); ?></div>
    <div class="name">Name : <?php echo $character->getName(); ?></div>
    <div class="life">Life : <?php echo $character->getLife(); ?>/100</div>
    <div class="mana">Mana : <?php echo $character->getMana(); ?>/100</div>
    <div class="mana">Power : <?php echo $character->getPower(); ?></div>
      
  </div>
<?php } ?>