<?php


namespace CompanyName\TeamFinder\Router;


interface ControllerInterface
{
    public function execute(PathParser $pathParser) : void;

    /**
     * @param array[string] $pathParser
     */
    public function render(array $viewArgs) : void;
}