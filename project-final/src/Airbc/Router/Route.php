<?php declare(strict_types=1);
namespace Airbc\Router;

use Airbc\Object;

class Route extends Object
{
    private $method;
    private $url;
    private $controller;

    public function __construct(string $method, string $url, callable $controller)
    {
        $this->method = $method;
        $this->url = $url;
        $this->controller = $controller;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getController() {
        return $this->controller;
    }
}