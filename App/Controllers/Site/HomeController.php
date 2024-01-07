<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  public function index()
  {
    echo $this->twig;
  }
}