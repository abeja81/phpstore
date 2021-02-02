<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));

// autoload composer 
require_once __DIR__ . '/../../vendor/autoload.php';

//load env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->load();