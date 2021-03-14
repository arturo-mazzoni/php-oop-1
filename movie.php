<?php

class Movie {
  public $titolo;
  public $anno;
  public $regista;
  public $protagonista;

  public Function __construct($_titolo) {
    $this->titolo = $_titolo;
  }

  public function calcolaEta($_annoCorrente) {
    return $this->anno - $_annoCorrente;
  }
}

$movie_1 = new Movie('Matrix');
$movie_2 = new Movie('Ritorno al futuro');

$movie_1->anno = '2000';
$movie_1->regista = 'Stanley Kubrik';
$movie_1->protagonista = 'Keanu Reeves';

$movie_2->anno = '1980';
$movie_2->regista = 'Quentin Tarantino';
$movie_2->protagonista = 'Michael Jamie Fox';

$etaMovie1 = $movie_1->calcolaEta('2021');
$etaMovie2 = $movie_2->calcolaEta('2021');

echo 'Titolo: '. $movie_1->titolo. ' | Anno: '. $movie_1->anno. ' | Regista: '. $movie_1->regista. ' | Protagonista: '. $movie_1->protagonista. ' || Età film: '. $etaMovie1. '<br>';
echo 'Titolo: '. $movie_2->titolo. ' | Anno: '. $movie_2->anno. ' | Regista: '. $movie_2->regista. ' | Protagonista: '. $movie_2->protagonista. ' || Età film: '. $etaMovie2;



