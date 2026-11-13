<?php

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Matomas\Proyecto1\Controllers\UserController;
use Matomas\Proyecto1\Controllers\PeliculaController;

session_start();
//Herramienta para cargar las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$router = new RouteCollector();

//Filtro para controlar si se puede entrar o no
$router->filter('auth', function(){
    if(!isset($_SESSION['user']))
    {
        header('Location: /login');

        return false;
    }
});


//Rutas de usuario
$router->get('/user/create',[UserController::class,'create']);
$router->get('/user/{id:i}/edit',[UserController::class,'edit'],['before' => 'auth']);
$router->get('/user',[UserController::class,'index'],['before' => 'auth']);
$router->get('/user/{id:i}',[UserController::class,'show']);
$router->post('/user',[UserController::class,'store']);
$router->put('/user/{id:i}',[UserController::class,'update']);
$router->delete('/user/{id:i}',[UserController::class,'destroy']);


//Rutas de login
$router->get('/login',[UserController::class,'login']);
$router->post('/signin',[UserController::class,'signin']);
$router->get('/logout',[UserController::class,'logout']);


//Rutas de API
$router->get('/api/user',[UserController::class,'index']);
$router->get('/api/user/{id:i}',[UserController::class,'show']);
$router->post('/api/user',[UserController::class,'store']);
$router->put('/api/user/{id:i}',[UserController::class,'update']);
$router->delete('/api/user/{id:i}',[UserController::class,'destroy']);

$router->get('/error',function(){
    include_once "app/Views/error.php";
});


$router->get('/movie/create',[PeliculaController::class,'create']);
$router->get('/movie/{id:c}/edit',[PeliculaController::class,'edit']);
$router->get('/movie',[PeliculaController::class,'index']);
$router->get('/movie/{id:c}',[PeliculaController::class,'show']);
$router->post('/movie',[PeliculaController::class,'store']);
$router->put('/movie/{id:c}',[PeliculaController::class,'update']);
$router->delete('/movie/{id:c}',[PeliculaController::class,'destroy']);







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









$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}catch(HttpRouteNotFoundException $e){
    $response = "Eres muuuuuuyyyyyy tonto, joder!!!";
}

// Print out the value returned from the dispatched function
echo $response;