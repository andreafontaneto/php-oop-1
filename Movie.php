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

}