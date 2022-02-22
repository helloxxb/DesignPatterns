<?php

use Structural\Composite\Form;
use Structural\Composite\InputElement;
use Structural\Composite\TextElement;

require '../../vendor/autoload.php';

$form = new Form();
$form->addElement(new TextElement('Email:'));
$form->addElement(new InputElement());

$embed = new Form();
$embed->addElement(new TextElement('Password:'));
$embed->addElement(new InputElement());
$form->addElement($embed);

echo $form->render();
