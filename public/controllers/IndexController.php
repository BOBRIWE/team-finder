<?php

namespace CompanyName\App\controllers;

use CompanyName\TeamFinder\Router\ControllerInterface;
use CompanyName\TeamFinder\Router\PathParser;

class IndexController implements ControllerInterface
{
    public $viewArgs;
    public function execute(PathParser $pathParser): void
    {
        $this->render($pathParser->getArgs());
    }

    public function render(array $viewArgs): void
    {
        include __DIR__.'/../views/index_view.php';
    }
}