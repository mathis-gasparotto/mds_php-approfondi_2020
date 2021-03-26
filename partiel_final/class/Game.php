<?php
class Game
{
  private $_id;
  private $_name;
  private $_img;
  private $_description;
  private $_rating;



  public function __construct(int $id, string $name, string $img, string $description, float $rating)
  {
    $this->setId($id);
    $this->setName($name);
    $this->setImg($img);
    $this->setDescription($description);
    $this->setRating($rating);
  }

  public function setId(int $id)
  {
    $this->_id = $id;
  }
  public function getId(): int
  {
    return $this->_id;
  }

  public function setName(string $name)
  {
    $this->_name = $name;
  }
  public function getName(): string
  {
    return $this->_name;
  }

  public function setImg(string $img)
  {
    $this->_img = $img;
  }
  public function getImg(): string
  {
    return $this->_img;
  }

  public function setDescription(string $description)
  {
    $this->_description = $description;
  }
  public function getDescription(): string
  {
    return $this->_description;
  }

  public function setRating(float $rating)
  {
    $this->_rating = $rating;
  }
  public function getRating(): float
  {
    return $this->_rating;
  }
}
