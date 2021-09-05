<?php

namespace router;

class Router{

    private $url = "";
    private $routes = [];

    public function __construct($_url){
        $this->url = $_url;
    }

    public function map($path, \Closure $fn){
        $this->routes[$path] = $fn;
    }

    public function run(){
        
        foreach($this->routes as $key => $value){
            $path = $key;
            $path = preg_replace('#{([\w]+)}#','([^/]+)', $path);
            $pathToMatch = "#^$path$#";

            if(preg_match($pathToMatch,$this->url,$matches)){
                $params = array_slice($matches,1);
                $this->routes[$key]->call($this,$this,$params);
            }
        }

    }

    public function render(string $page, array $params = []){
        $params;
        $file = trim(dirname(__DIR__)).'/src/template/'.$page;
        return require_once($file);
    }

    public function show(){
        return $this->url;
    }
}