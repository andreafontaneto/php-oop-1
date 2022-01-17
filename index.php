<?php

class Movie{

  public $name;
  public $genre;
  public $year;
  public $director;
  public $movie_time;

}

$movie1 = new Movie();
$movie1->name = "Ritorno al Futuro";
$movie1->genre = "Sci-fi / Commedia";
$movie1->year = 1985;
$movie1->director = "Robert Zemeckis";
$movie1->movie_time = 90;

$movie2 = new Movie();
$movie2->name = "Harry Potter";
$movie2->genre = "Fantasy";
$movie2->year = 2011;
$movie2->director = "Chris Columbus";
$movie2->movie_time = 189;

var_dump($movie1);
var_dump($movie2);


?>