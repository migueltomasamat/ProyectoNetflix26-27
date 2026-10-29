<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Class\User;
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
        $titulo = "Creación de un nuevo usuario";
        $descripcion = "Inserta todos los datos del formulario para crear un usuario";
        include_once "app/Views/backend/admin.users.create.php";
    }

    public function update(int $id)
    {

        $datosAModificar=
            json_decode(file_get_contents("php://input"),true);

        $datosAModificar['id']=$id;

        $validacion = User::validateUserUpdate($datosAModificar);

        //Leer un usuario de la base de datos
        $usuarioAntiguo = UserModel::getUserById($id);

        if($usuarioAntiguo===false){
            return "No se ha encontrado el usuario a modificar";
        }else {

            $usuarioNuevo = User::updateFromArray($usuarioAntiguo, $datosAModificar);

            if (UserModel::updateUser($usuarioNuevo)) {
                return "Usuario modificado correctamente";
            } else {
                return "Error al modificar el usuario";
            }
        }




    }



    public function store()
    {

        //validar los datos que me han llegado
        $validacion=User::validateUserCreation($_POST);

        if($validacion===true){
            //El usuario ha sido validado correctamente

            $usuario = User::createFromArray($_POST);

            //Enviar al modelo la instancia del objeto que debe guardar en la BD
            if (!UserModel::saveUser($usuario)){
                return "Ha ocurrido un  error de almacenamiento";
            }else{
                header("Location: /user");
            }
        }else{
            //Ha habido errores de validación
            foreach ($validacion as $error){
                echo $error;
            }
        }

    }

    public function edit(int $id)
    {
        //Necesito recuperar el usuario de la base de datos
        $usuario = UserModel::getUserById($id);

        //Voy a incluir la vista de edición de datos
        include_once "app/Views/backend/admin.users.edit.php";

    }

    public function destroy(int $id)
    {

        if(UserModel::deleteUser($id)){
            //Si se ha borrado correctamente
            http_response_code(200);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>false,
                "message"=>"Usuario eliminado correctamente",
                "code"=>200
            ]);

        }else{
            //Si ha ocurrido algun fallo
            http_response_code(404);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>true,
                "message"=>"No se ha podido eliminar el usuario",
                "code"=>404
            ]);
        }

    }
}