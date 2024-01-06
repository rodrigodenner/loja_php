<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller
{
  const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
  const FOLDERS_CONTROLLER = ['Site','Admin'];
  const ERROR_CONTROLLER = '\\App\\Controllers\\Error\\ErrorController';

  private $controller;
  private $uri;

  public function __construct()
  {
    $this->uri = New Uri;
  }

  public function getController()
  {
    if (!$this->uri->emptyUri()) {
      $explodedUri = array_filter(explode('/', $this->uri->getUri()));
      return (!empty($explodedUri[1]) ? ucfirst($explodedUri[1]) . 'Controller' : null);
    }
    return ucfirst(DEFAULT_CONTROLLER).'Controller';
  }
}