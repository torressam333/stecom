<?php
use App\Controllers\IndexController;


//Create instance of alto router class
$router = new AltoRouter;

$router->map('GET', '/', '', 'Home');

$match = $router->match();

if($match){
    require_once __DIR__. '/../controllers/BaseController.php';
    require_once __DIR__. '/../controllers/IndexController.php';
    $index = new IndexController();
    $index->show();
}else{
    header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
    echo "Page not found";
}
