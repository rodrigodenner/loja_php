<?php

namespace App\Controllers;

use App\Classes\Uri;

class Method
{
  private Uri $uri;
  public function __construct()
  {
    $this->uri = new Uri;
  }

  private function getMethod()
  {
    if (!$this->uri->emptyUri()) {
      $explodedUri = array_filter(explode('/', $this->uri->getUri()));
      return (isset($explodedUri[2])) ? $explodedUri[2] : null;
    }
    return null;
  }

  public function method($object)
  {
    if(method_exists($object,$this->getMethod())){
      return $this->getMethod();
    }
    return DEFAULT_METHOD;
  }
}