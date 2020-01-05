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
        var_dump($controller->$functionName());
    } else {
        var_dump($controller->$functionName($parameter));
    }
} catch (Exception $e) {
    throw new Exception($e);
}


