<?php

namespace App\Controllers\Site;
use App\Controllers\BaseController;

class ProdutoController extends BaseController

{
  public function index(): void
  {
    dump('produto');
  }

  public function calca($parameters): void
  {
    dump($parameters);
  }
}