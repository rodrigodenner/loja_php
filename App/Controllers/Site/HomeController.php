<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  public function index(): void
  {
    $data = [
      'title' => 'Loja Virtual',
      'name' => 'Rodrigo Denner'
    ];
//    $template = $this->twig->load('site_home.html');
//    $template->display($data);
      echo $this->twig->render('site_home.html',$data);
  }
}

