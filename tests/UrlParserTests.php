<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\core\UrlParser;

class UrlParserTests extends TestCase
{
    public function testControllerParser() {
        $url = "http://123.34.545/test/create/1";
        $urlParser = new UrlParser();

        $matches = $urlParser->parseUrl($url);

        $this->assertTrue($matches['controller'] == 'TestController');
    }

    public function testActionParser() {
        $url = "http://123.34.545/test/create/1";
        $urlParser = new UrlParser();

        $matches = $urlParser->parseUrl($url);

        $this->assertTrue($matches['action'] == 'create');
    }

    public function testParameterParser() {
        $url = "http://123.34.545/test/create/1";
        $urlParser = new UrlParser();

        $matches = $urlParser->parseUrl($url);

        $this->assertTrue($matches['parameter'] == '1');
    }


}