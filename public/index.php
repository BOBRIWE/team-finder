<?php

require_once '../vendor/autoload.php';

use CompanyName\App\controllers\IndexController;
use CompanyName\TeamFinder\Router\PathParser;
use CompanyName\TeamFinder\Router\Router;

$router = new Router();

$router->add('/', new IndexController());


$pathParser = new PathParser($_ENV['REQUEST_URI']);


$router->executeController($pathParser->getMainRoute());
