<?php

namespace src\Controller;

use Model;

require_once dirname(__DIR__).'/models/film.class.php';

class ExempleController{

    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function execute(){
        /**
        * Mapping des url avec ou sans parametree
        * 1 parametre = url/{nameParam}
        * plusieur parametre = url/{param1}/{param2}/ect
        */
        $this->router->map('exemple',function($router){

           /* $film = Model::factory('Film')->create(); 
            $film->name = "test";
            $film->year = "2010";
            $film->text = "le test";
            $film->save();*/

            $films = Model::factory('Film')->find_many();
           
            $router->render("exemple/exemple.php",[
                "films" => $films,
            ]);
        });
        
    }   
}
