<?php
require "bootstrap.php";

use app\core\UrlParser;

try {
    $urlParser = new UrlParser();
    $matches = $urlParser->parseUrl($_SERVER['REQUEST_URI']);
    $controllerName = "app\api\\"."{$matches["controller"]}";

// Assume that every controller need the unitOfWork???
    $controller = new $controllerName($unitOfWork);
    $functionName = $matches['action'];
    $parameter = $matches['parameter'];

    if ($parameter === null) {
        echo $controller->$functionName();
    } else {
        echo $controller->$functionName($parameter);
    }
} catch (Exception $e) {
    var_dump($e);
    //throw new Exception($e);
}


