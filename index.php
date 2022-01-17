<?php

require_once __DIR__."/Movie.php";

// MOVIE 1
$movie1 = new Movie("Ritorno al Futuro");
// $movie1->name = "Harry Potter";
$movie1->genre = "Sci-fi / Commedia";
$movie1->year = 1985;
$movie1->director = "Robert Zemeckis";
$movie1->movie_time = 90;


// MOVIE 2
$movie2 = new Movie("Harry Potter");
// $movie2->name = "Harry Potter";
$movie2->genre = "Fantasy";
$movie2->year = 2011;
$movie2->director = "Chris Columbus";
$movie2->movie_time = 189;

var_dump($movie1);
var_dump($movie2);