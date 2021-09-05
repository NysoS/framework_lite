<?php

namespace src\Controller;

class ExempleController{

    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function execute(){
        /**
        * Mapping des url avec ou sans parametre
        * 1 parametre = url/{nameParam}
        * plusieur parametre = url/{param1}/{param2}/ect
        */
        $this->router->map('exemple',function($router){
        
            $router->render("exemple/exemple.php");
        });
        
    }   
}
