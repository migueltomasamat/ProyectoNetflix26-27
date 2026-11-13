<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Interfaces\ControllerInterface;
use Matomas\Proyecto1\Models\PeliculaModel;

class PeliculaController implements ControllerInterface
{

    public function index()
    {

        $peliculas=PeliculaModel::getAllMovies();

        include_once "app/Views/backend/admin.movies.index.php";


    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }



    public function store()
    {
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}