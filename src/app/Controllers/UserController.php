<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Interfaces\ControllerInterface;

class UserController implements ControllerInterface
{

    public function index()
    {
        return "Página para ver todos los usuarios";
    }

    public function show(int $id)
    {
        return "Me estas pidiendo los datos del usuario $id";
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
        return var_dump($_POST);
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