<?php

namespace Matomas\Proyecto1\Interfaces;

interface ControllerInterface
{
    //Ver todos los usuarios
    public function index();

    //Ver un solo usuario
    public function show($id);

    //Crear un usuario
    public function create();

    public function store();

    //Modificar un usuario
    public function update($id);

    public function edit($id);

    //Borrar un usuario
    public function destroy($id);

}