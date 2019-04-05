<?php
use App\RouteDispatcher;
use App\Classes\Database;

//Start session if not already started
if(!isset($_SESSION)) session_start();

//Load env variables
require_once __DIR__ . '/../app/config/_env.php';

//Instantiate DB class
new Database();

require_once __DIR__ . '/../app/routing/routes.php';

new RouteDispatcher($router);

