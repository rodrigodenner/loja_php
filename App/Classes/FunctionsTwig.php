<?php

namespace App\Classes;

use Twig\TwigFunction;

class FunctionsTwig
{
  public function siteUrl($twig) {
    $twig->addFunction(new TwigFunction('site_url', function () {
      return 'http://' . $_SERVER['SERVER_NAME'] . ':8485';
    }));
  }
}