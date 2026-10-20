<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Interfaces\ControllerInterface;
use Matomas\Proyecto1\Models\UserModel;

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
        $descripcion = "Usuarios resgistrados en el sistema";
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
        return "{
            'messaje':'El usuario a editar es '$id
        }";
    }



    public function store()
    {
        return var_dump(

        );
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