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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>

  <h1>Titolo: <?php echo $movie1->name ?></h1>
  <h3>Generi: <?php echo $movie1->genre ?></h3>
  <h4>Anno: <?php echo $movie1->year ?></h4>
  <h4>Regista: <?php echo $movie1->director ?></h4>
  <h4>Durata: <?php echo $movie1->movie_time ?> min</h4>
  <!-- VOTO AGGIUNTO TRAMITE METODO-->
  <h4>Voto: <?php echo $movie1->getVote() ?></h4>

  <h1>Titolo: <?php echo $movie2->name ?></h1>
  <h3>Generi: <?php echo $movie2->genre ?></h3>
  <h4>Anno: <?php echo $movie2->year ?></h4>
  <h4>Regista: <?php echo $movie2->director ?></h4>
  <h4>Durata: <?php echo $movie2->movie_time ?> min</h4>
  <!-- VOTO AGGIUNTO TRAMITE METODO-->
  <h4>Voto: <?php echo $movie2->getVote() ?></h4>
  
</body>
</html>