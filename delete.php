<?php 
require_once 'include/cnx.inc.php';
require_once 'models/film.class.php';// créer un bo Business object Personne

// DELETE

$id = 1;

// trouver un objet en fct de son id 
$film = Model::factory('Film')->findOne($id);
$film->delete();
