<?php require_once '../vendor/autoload.php';
use TeamFinder\Core\Form;


$form = new Form('');

if (isset($_GET['test-form-button']))
{
    $form->setName($_GET['input-name']);
}

include 'views/index_view.php';