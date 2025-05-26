<?php

if (PHP_MAJOR_VERSION < 8) {
   die("This application requires at least 8 major versions.");
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \wfm\App();

debug(\wfm\Router::getRoutes());
