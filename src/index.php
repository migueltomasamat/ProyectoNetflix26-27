<?php

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/', function () {
    include_once "app/Views/frontend/frontend.index.php";
});
$router->get('/series',function(){
    include_once "app/Views/frontend/frontend.series.php";
});

$router->get('/admin', function(){
    include_once "app/Views/backend/code.html";
});

$router->get('/get-uuid', function(){
    return \Ramsey\Uuid\Uuid::uuid4()->toString();
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}catch(HttpRouteNotFoundException $e){
    $response = "Eres muuuuuuyyyyyy tonto, joder!!!";
}

// Print out the value returned from the dispatched function
echo $response;