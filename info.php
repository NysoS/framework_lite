$path = "/test/{id}";
$url = "/test/55/ok";
$matches;

$path = preg_replace('#{([\w]+)}#','([^/]+)', $path);

$pathToMatch = "#^$path$#";



var_dump($url);
var_dump($pathToMatch);

if(preg_match($pathToMatch,$url,$matches)){
    var_dump($matches);
}
