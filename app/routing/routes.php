<?php
use App\Controllers\IndexController;


//Create instance of alto router class
$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');