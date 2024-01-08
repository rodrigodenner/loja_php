<?php

namespace App\Classes;

class Parameters
{
  private mixed $uri;
  private mixed $parameter;

  public function __construct()
  {
    $uri = new Uri;
    $this->uri = $uri->getUri();
    $this->explodeParameters();
  }

  private function explodeParameters(): void
  {
    $explodeUri = explode('/', $this->uri);
    $this->parameter = array_filter($explodeUri);
  }

  public function getParameterMethod($object, $method)
  {
    if (method_exists($object, $method)) {
      if ($method == 'index') {
        unset($this->parameter[1]);
        return isset($this->parameter[2]) ? array_values(array_filter($this->parameter)) : null;
      }
      unset($this->parameter[1],$this->parameter[2]);
      return isset($this->parameter[3]) ? array_values($this->parameter) : null;
    }
    return null;
  }
}