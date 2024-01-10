<?php
use Twig\TwigFunction;

$site_url = new TwigFunction('site_url',function (){
  return 'http://' . $_SERVER['SERVER_NAME'] . '8485';
});