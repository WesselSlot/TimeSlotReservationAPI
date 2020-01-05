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
        $items = explode("/", $url);

        $matches['controller'] = $this->convertToController($items[1]);

        if (empty($items[2])) {
            $matches['action'] = "index";
        } else {
            $matches['action'] = $items[2];
        }

        if (empty($items[3])) {
            $matches['parameter'] = null;
        } else {
            $matches['parameter'] = $items[3];
        }

        return $matches;
    }

    private function convertToController($controllerName) {
        $controllerName = ucfirst($controllerName);

        return $controllerName."Controller";
    }
}