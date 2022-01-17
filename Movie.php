<?php

//setto la classe Movie con le sue proprietà (che ancora non esistono)
class Movie{

  public $name;
  public $genre;
  public $year;
  public $director;
  public $movie_time;

  // tramite __construct gli dico quali proprietà sono obbligatorie
  function __construct($_name, $_genre, $_year, $_director, $_movie_time)
  {
    $this->name = $_name;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->director = $_director;
    $this->movie_time = $_movie_time;
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