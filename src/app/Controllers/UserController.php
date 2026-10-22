<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Class\User;
use Matomas\Proyecto1\Interfaces\ControllerInterface;
use Matomas\Proyecto1\Models\UserModel;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControllerInterface
{

    public function index()
    {
        //Necesito preguntar al modelo y que me de un array con
        //los objetos que representen todos los usuarios que hay en la BD

        $usuarios=UserModel::getUsers();


        //Tengo que crear una vista donde se muestre una
        // tabla con todos los usuarios
        $titulo = "Gestión de usuarios";
        $descripcion = "Usuarios registrados en el sistema";
        include_once "app/Views/backend/admin.users.index.php";

    }

    public function show(int $id)
    {
        $titulo = "Datos del usuario $id";
        include_once "app/Views/backend/admin.users.show.php";
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update(int $id)
    {

    }



    public function store()
    {

        //Recibir los datos que me llegan por la función POST
        var_dump($_POST);

        //validar los datos que me han llegado
        try{
            v::key('name',v::stringType())->
            key('address',v::stringType(),false)->
            key('phone',v::stringType()->length(9,9),false)->
            key('birthdate',v::date('Y-m-d'),false)->
            key('password',v::stringType()->length(2,25))->
            key('email',v::email())->assert($_POST);
        }catch (NestedValidationException $e){
            $errores = $e->getMessages();
            foreach ($errores as $error){
                echo $error;
            }
        }

        $usuario = User::createFromArray($_POST);

        var_dump($usuario);



    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy(int $id)
    {
        return "Borrar usuario $id";
    }
}