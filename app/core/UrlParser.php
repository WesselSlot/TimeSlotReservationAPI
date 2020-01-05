<?php
namespace app\core;

use Exception;

/**
 * Class UrlParser
 * @package src\core
 *
 * The expected url format is {controller}/{function}/{parameter}/
 */
class UrlParser
{
    public function parseUrl($url) {
        $matches = array();
        $partsOfUrl = parse_url($url);
        $pathParts = explode("/", substr($partsOfUrl["path"], 1));

        $matches['controller'] = $this->convertToController($pathParts[0]);

        if (empty($pathParts[1])) {
            $matches['action'] = "index";
        } else {
            $matches['action'] = $pathParts[1];
        }

        if (empty($pathParts[2])) {
            $matches['parameter'] = null;
        } else {
            $matches['parameter'] = $pathParts[2];
        }

        return $matches;
    }

    private function convertToController($controllerName) {
        $controllerName = ucfirst($controllerName);

        return $controllerName."Controller";
    }
}