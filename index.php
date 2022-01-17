<?php

require_once __DIR__."/Movie.php";
require_once __DIR__."/db_movies.php";

// // MOVIE 1
// $movie1 = new Movie("Ritorno al Futuro");
// // $movie1->name = "Harry Potter";
// $movie1->genre = "Sci-fi / Commedia";
// $movie1->year = 1985;
// $movie1->director = "Robert Zemeckis";
// $movie1->movie_time = 90;


// // MOVIE 2
// $movie2 = new Movie("Harry Potter");
// // $movie2->name = "Harry Potter";
// $movie2->genre = "Fantasy";
// $movie2->year = 2011;
// $movie2->director = "Chris Columbus";
// $movie2->movie_time = 189;

// var_dump($movie1);
// var_dump($movie2);

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

  <!-- BONUS -->

  <!-- faccio partire il ciclo su tutto il div -->
  <?php foreach($movies as $movie) : 
    // creo il nuovo oggetto con classe Movie e gli passo le proprietà obbligatorie settare prima (in Movie.php)
    $new_movie = new Movie($movie["name"], $movie["genre"], $movie["year"], $movie["director"], $movie["movie_time"]);
  ?>
  <div>
    <!-- stampo le proprietà MA dal NUOVO oggetto "new_movie" -->
    <h1>Titolo: <?php echo $new_movie->name ?></h1>
    <h3>Generi: <?php echo $new_movie->genre ?></h3>
    <h4>Anno: <?php echo $new_movie->year ?></h4>
    <h4>Regista: <?php echo $new_movie->director ?></h4>
    <h4>Durata: <?php echo $new_movie->movie_time ?> min</h4>
    <!-- VOTO AGGIUNTO TRAMITE METODO-->
    <h4>Voto: <?php echo $new_movie->getVote() ?></h4>
  </div>

  <hr>
  <?php endforeach; ?>

  
</body>
</html>