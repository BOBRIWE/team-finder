<?php

namespace CompanyName\TeamFinder\Router;


class Router
{
    /**
     * @var ControllerInterface[]
     */
    private $paths = [];

    public function __construct()
    {

    }

    public function add(string $path, ControllerInterface $controller) : void
    {
        $this->paths[$path] = $controller;
    }

    public function executeController(PathParser $pathParser) : void
    {
        $this->paths[$pathParser->getMainRoute()]->execute($pathParser);
    }
}