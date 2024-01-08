<?php

namespace App\Controllers;

class BaseController
{
  protected mixed $twig;

  public function setTwig($twig): void
  {
    $this->twig = $twig;
  }
}