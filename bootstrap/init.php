<?php 
// start session if not started
if(!isset($_SESSION)) session_start();
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// load enviroment variables 

require_once __DIR__ . '/../app/config/_env.php';

// init database class

new \App\Classes\Database();


// load routes

require_once __DIR__ . '/../app/routing/routes.php';

new \App\Routing\RouteDispatcher($router);


