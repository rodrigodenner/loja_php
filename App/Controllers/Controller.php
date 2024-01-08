<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller
{
  const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
  const FOLDERS_CONTROLLER = ['Site', 'Admin'];
  const ERROR_CONTROLLER = '\\App\\Controllers\\Error\\ErrorController';

  private Uri $uri;

  public function __construct()
  {
    $this->uri = new Uri();
  }

  private function getController(): ?string
  {
    if (!$this->uri->emptyUri()) {
      $explodedUri = array_filter(explode('/', $this->uri->getUri()));
      return (!empty($explodedUri[1]) ? ucfirst($explodedUri[1]) . 'Controller' : null);
    }
    return ucfirst(DEFAULT_CONTROLLER) . 'Controller';
  }

  public function controller(): BaseController|string
  {
    $controller = $this->getController();
    foreach (self::FOLDERS_CONTROLLER as $folderController) {
      $controllerClass = self::NAMESPACE_CONTROLLER . $folderController . '\\' . $controller;
      if (class_exists($controllerClass) && is_subclass_of($controllerClass, BaseController::class)) {
        return $controllerClass;
      }
    }
    return self::ERROR_CONTROLLER;
  }
}