<?php

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

//Rutas del Frontend

$router->get('/', function () {
    include_once "app/Views/frontend/frontend.index.php";
});
$router->get('/series',function(){
    include_once "app/Views/frontend/frontend.series.php";
});


//Rutas del backend
$router->get('/admin', function(){
    include_once "app/Views/backend/code.html";
});


//Rutas de ejemplos

$router->get('/get-uuid', function(){
    return \Ramsey\Uuid\Uuid::uuid4()->toString();
});

$router->get('/obtener-pass',function(){
    include_once "ejemplos/funciones.php";
    echo create_pass();
});

$router->get('/movie/add',function(){
    include_once "app/Views/backend/admin.movie.new.php";
});
$router->post('/movie',function(){
   //Que hacemos con los datos de la pelicula

    var_dump($_POST);
    var_dump($_FILES);
});







$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}catch(HttpRouteNotFoundException $e){
    $response = "Eres muuuuuuyyyyyy tonto, joder!!!";
}

// Print out the value returned from the dispatched function
echo $response;