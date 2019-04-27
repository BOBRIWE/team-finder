<?php

namespace CompanyName\App\controllers;

use CompanyName\TeamFinder\Core\Form;
use CompanyName\TeamFinder\Router\IController;

class IndexController implements IController
{
    private $form;
    public function execute()
    {
        $this->form = new Form('');

        if (isset($_GET['test-form-button']))
        {
            $this->form->setName($_GET['input-name']);
        }

        include __DIR__.'/../views/index_view.php';
    }
}