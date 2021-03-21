<?php
class Movie
{
  private $_name;
  private $_img;
  private $_original_name;
  private $_vote_average;
  private $_vote_count;
  private $_release_date;
  private $_overview;



  public function __construct(string $name, string $img, string $original_name, float $vote_average, int $vote_count, string $release_date, string $overview)
  {
    $this->setName($name);
    $this->setImg($img);
    $this->setOriginalName($original_name);
    $this->setVoteAverage($vote_average);
    $this->setVoteCount($vote_count);
    $this->setReleaseDate($release_date);
    $this->setOverview($overview);
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

  public function setOriginalName(string $original_name)
  {
    $this->_original_name = $original_name;
  }
  public function getOriginalName(): string
  {
    return $this->_original_name;
  }

  public function setVoteAverage(float $vote_average)
  {
    $this->_vote_average = $vote_average;
  }
  public function getVoteAverage(): float
  {
    return $this->_vote_average;
  }

  public function setVoteCount(int $vote_count)
  {
    $this->_vote_count = $vote_count;
  }
  public function getVoteCount(): int
  {
    return $this->_vote_count;
  }

  public function setReleaseDate(string $release_date)
  {
    $this->_release_date = $release_date;
  }
  public function getReleaseDate(): string
  {
    return $this->_release_date;
  }

  public function setOverview(string $overview)
  {
    $this->_overview = $overview;
  }
  public function getOverview(): string
  {
    return $this->_overview;
  }
}
