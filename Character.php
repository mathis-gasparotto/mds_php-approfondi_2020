<?php

/**
 * Represent a playable Character
 */
class Character 
{

  /**
   * character's id
   *
   * @var int
   */
  private $_id;

  /**
   * character's name
   *
   * @var string
   */
  private $_name;

  /**
   * Life represent Hp
   * When life is 0, character is dead
   *
   * @var int
   */
  private $_life = 100;

  /**
   * Power represent character's power
   *
   * @var int
   */
  private $_power;

  /**
   * Mana represent character's mana
   *
   * @var int
   */
  private $_mana = 100;



  /**
   * construct function
   *
   * @param int $id
   * @param string $name
   * @return void
   */
  public function __construct(int $id, string $name, float $power)
  {
    $this->setId($id);
    $this->setName($name);
    $this->setPower($power);
  }



  /**
   * get private property $_id
   *
   * @return int
   */
  public function getId() : int
  {
    return $this->_id;
  }
  /**
   * set private property $_id
   *
   * @param int $id
   * @return void
   */
  public function setId(int $id)
  {
    $this->_id = $id;
  }


  /**
   * get private property $_name
   *
   * @return string
   */
  public function getName() : string
  {
    return $this->_name;
  }
  /**
   * set private property $_name
   *
   * @param string $name
   * @return void
   */
  public function setName(string $name)
  {
    $this->_name = $name;
  }


  /**
   * get private property $_life
   *
   * @return float
   */
  public function getLife() : float
  {
    return $this->_life;
  }
  /**
   * set private property $_life
   *
   * @param float $life
   * @return void
   */
  public function setLife(float $life)
  {
    $this->_life = $life;
  }


  /**
   * get private property $_power
   *
   * @return float
   */
  public function getPower() : float
  {
    return $this->_power;
  }
  /**
   * set private property $_power
   *
   * @param float $power
   * @return void
   */
  public function setPower(float $power)
  {
    $this->_power = $power;
  }


  /**
   * get private property $_mana
   *
   * @return float
   */
  public function getMana() : float
  {
    return $this->_mana;
  }
  /**
   * set private property $_mana
   *
   * @param float $mana
   * @return void
   */
  public function setMana(float $mana)
  {
    $this->_mana = $mana;
  }



  /**
   * Shout uses 30 mana but give some 20 hp back
   *
   * @return void
   */
  public function shout(): void
  {
    if ($this->useMana(30)) {
      echo "BAAAAAAR !!!!!";
      $this->_life += 20;
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
    $this->_mana += 50;
  }

  public function useMana(int $neededmana): bool
  {
    if ($this->_mana >= $neededmana) {
      $this->_mana -= $neededmana;
      return true;
    } else {
      return false;
    }
  }

  public function looseHp(int $lostHp): bool
  {
    $this->_life -= $lostHp;
    if ($this->_life <= 0) {
      return true;
    } else {
      return false;
    }
  }


}