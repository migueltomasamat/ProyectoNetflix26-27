<?php

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Matomas\Proyecto1\Controllers\UserController;
use Matomas\Proyecto1\Controllers\PeliculaController;

//Herramienta para cargar las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$router = new RouteCollector();


//Rutas de usuario
$router->get('/register',[UserController::class,'create']);
$router->get('/user/{id}/edit',[UserController::class,'edit']);
$router->get('/user',[UserController::class,'index']);
$router->get('/user/{id}',[UserController::class,'show']);
$router->post('/user',[UserController::class,'store']);
$router->put('/user/{id}',[UserController::class,'update']);
$router->delete('/user/{id}',[UserController::class,'destroy']);










//Rutas de Ejemplo

$router->get('/', function () {
    include_once "app/Views/frontend/frontend.index.php";
});
$router->get('/series',function(){
    include_once "app/Views/frontend/frontend.series.php";
});


//Rutas del backend
$router->get('/admin', function(){
    $title = "Admin Principal";
    include_once "app/Views/backend/admin.index.php";
});

$router->get('/admin/peliculas', function(){
    $title = "Admin Peliculas";
    include_once "app/Views/backend/admin.index.php";
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
    include_once "app/Views/backend/admin.movie.add.php";
});
$router->post('/movie',function(){
   //Que hacemos con los datos de la pelicula

    var_dump($_POST);
    manageFiles($_FILES);
});







$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}catch(HttpRouteNotFoundException $e){
    $response = "Eres muuuuuuyyyyyy tonto, joder!!!";
}

// Print out the value returned from the dispatched function
echo $response;