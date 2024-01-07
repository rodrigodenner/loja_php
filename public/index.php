<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
  return false;
} else {
  session_start();
  define("DEFAULT_CONTROLLER", 'home');
  define("DEFAULT_METHOD", 'index');

  require "../vendor/autoload.php";
  require "bootstrap/bootstrap.php";
  require "../App/Functions/functions_twig.php";
}

