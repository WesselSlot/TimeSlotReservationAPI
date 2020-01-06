<?php
require "bootstrap.php";

use app\core\UrlParser;

$urlParser = new UrlParser();
$matches = $urlParser->parseUrl($_SERVER['REQUEST_URI']);
$controllerName = "app\api\\"."{$matches["controller"]}";

$controller = new $controllerName();
$functionName = $matches['action'];
$parameter = $matches['parameter'];

try {
    if ($parameter === null) {
        echo $controller->$functionName();
    } else {
        echo $controller->$functionName($parameter);
    }
} catch (Exception $e) {
    throw new Exception($e);
}


