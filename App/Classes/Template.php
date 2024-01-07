<?php

namespace App\Classes;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Template
{
  public function loader()
  {
    return new  FilesystemLoader(['../App/Views/Site','../App/Views/Admin']);
  }

  public function init()
  {
     return new Environment($this->loader(),[
      'debug' => true,
      //'cache' => '',
      'auto_reload' => true
    ]);

  }
}