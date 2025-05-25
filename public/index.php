<?php

if (PHP_MAJOR_VERSION < 8) {
   die("This application requires at least 8 major versions.");
}

require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();

echo $test;