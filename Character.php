<?php

/**
 * Represent a playable Character
 */
class Character 
{

  /**
   * Life represent Hp
   * When life is 0, character is dead
   *
   * @var int
   */
  public $life = 100;
  /**
   * Power represent character's power
   *
   * @var int
   */
  public $power;
  /**
   * Mana represent character's mana
   *
   * @var int
   */
  public $mana = 100;


  /**
   * Shout uses 30 mana but give some 20 hp back
   *
   * @return void
   */
  public function shout(): void
  {
    if ($this->useMana(30)) {
      echo "BAAAAAAR !!!!!";
      $this->life += 20;
    } else  {
      echo "NO MANA !! NEDD REGEN !!!";
    }
  }

  public function attack(): void
  {
    
  }

  /**
   * throwFireball uses 40 mana
   * 10% of chance to loose 10 hp
   *
   * @return void
   */
  public function throwFireball(): void
  {
    if ($this->useMana(40)) {
      if (random_int(0,9) == 1){
        $this->looseHp(10);
      }
    }
  }

  public function regen(): void
  {
    $this->mana += 50;
  }

  public function useMana(int $neededmana): bool
  {
    if ($this->mana >= $neededmana) {
      $this->mana -= $neededmana;
      return true;
    } else {
      return false;
    }
  }

  public function looseHp(int $lostHp): bool
  {
    $this->life -= $lostHp;
    if ($this->life <= 0) {
      return true;
    } else {
      return false;
    }
  }


}