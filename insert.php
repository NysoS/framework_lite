<?php 

require_once "./config/cnx.inc.php";
require_once './src/models/film.class.php';// créer un bo Business object Personne

// INSERT

// création d'un objet film
$film = Model::factory('Film')->create(); 
$film->name = "SAW 7";
$film->year = "2010";
$film->text = "Histoire d'amour";
$film->save();
echo $film->id;
