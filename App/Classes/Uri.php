<?php

namespace App\Classes;

class Uri
{
  private mixed $uri;
  public function __construct()
  {
    $this->uri=$_SERVER['REQUEST_URI'];
  }

  public function emptyUri(): bool
  {
    return $this->uri =='/';
  }

  public function getUri()
  {
    return $this->uri;
  }
}