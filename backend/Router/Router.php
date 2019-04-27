<?php

namespace CompanyName\TeamFinder\Router;


class Router
{
    /**
     * @var IController[]
     */
    private $paths = [];

    public function __construct()
    {

    }

    public function add(string $path, IController $controller) : void
    {
        $this->paths[$path] = $controller;
    }

    public function executeController(string $path) : void
    {
        $this->paths[$path]->execute();
    }
}