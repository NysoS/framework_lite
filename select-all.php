<?php 
require_once 'include/cnx.inc.php';
require_once 'models/film.class.php';// créer un bo Business object Personne

// Afficher tous les films
$films = Model::factory('Film')->find_many(); // SELECT * FROm

foreach ($films as $film) {
	echo "<b>".$film->name."</b> ";
	echo "<i>".$film->year."</i> ";
	echo "<p>".$film->text."</p> ";
	echo "<hr>";
}