<?php 
require_once 'include/cnx.inc.php';
require_once 'models/film.class.php';// créer un bo Business object Personne

// UPDATE

// mise à jour d'un film
$id =3;
$name = "Inception";
// trouver un objet en fct de son id 
$film = Model::factory('Film')->findOne($id);
$film->name = $name;
$film->save(); 