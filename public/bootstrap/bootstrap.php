<?php
use App\Classes\Template;
use App\Controllers\Controller;
use App\Controllers\Method;

$template = new Template;
$twig = $template->init();

/**
 * Chamando o controller pela url
 */
$callController = new Controller;
$colledController = $callController->controller();
$controller = new $colledController();
$controller->setTwig($twig);

/**
 * Chamando o metodo pela url
 */
$callMethod = new Method;
$method = $callMethod->method($controller);


/**
 * Chamando o controller e o methodo pela url
 */
$controller->$method();
