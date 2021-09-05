<?php

require_once 'idiorm.php'; // 1 idorm
require_once 'paris.php'; // 2 paris  Paris est une extension de idiorm
require_once 'config.inc.php';
//--------------------------------------------
// connecter à la la base de données DATABASE

ORM::configure("mysql:host=".HOST.";dbname=".DATABASE); // utf8 ???
ORM::configure("username",LOGIN); 
ORM::configure("password",PSW);

