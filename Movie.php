<?php

class Movie{

  public $name;
  public $genre;
  public $year;
  public $director;
  public $movie_time;

  function __construct($_name)
  {
    $this->name = $_name;
  }

  public function getVote(){
    $vote = 0;

    if($this->movie_time > 100){
      $vote = 3;
    } else if($this->movie_time <= 90){
      $vote = 8;
    }

    return $vote;
  }

}