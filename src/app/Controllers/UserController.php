<?php

namespace Matomas\Proyecto1\Controllers;

use Matomas\Proyecto1\Class\Auxiliar;
use Matomas\Proyecto1\Class\User;
use Matomas\Proyecto1\Interfaces\ControllerInterface;
use Matomas\Proyecto1\Models\UserModel;
use function Respect\Stringifier\stringify;


class UserController implements ControllerInterface
{

    public function index()
    {


        //Necesito preguntar al modelo y que me de un array con
        //los objetos que representen todos los usuarios que hay en la BD

        $usuarios=UserModel::getUsers();


        if (Auxiliar::isApiRequest()){

            //Responderíamos en formato JSON
            http_response_code(200);
            header("Content-Type: application/json");
            return json_encode([
               "error"=>false,
               "message"=>"Datos de todos los usuarios del sistema",
               "data"=>$usuarios,
               "code"=>200
            ]);
        }else{

            //Tengo que crear una vista donde se muestre una
            // tabla con todos los usuarios
            $titulo = "Gestión de usuarios";
            $descripcion = "Usuarios registrados en el sistema";
            include_once "app/Views/backend/admin.users.index.php";

        }



    }

    public function show($id)
    {
        //Comprobamos que el usuario exista en la BD
        $usuario = UserModel::getUserById($id);

        if (!$usuario){
            if (Auxiliar::isApiRequest()){
                header("Content-Type: application/json");
                http_response_code(404);
                return json_encode([
                    "error"=>true,
                    "message"=>"No se ha podido encontrar el usuario buscado",
                    "code"=>404
                ]);
            }else{
                $error = "No se ha podido encontrar el usuario buscado";
                include_once "app/Views/error.php";
            }
        }else{
            if (Auxiliar::isApiRequest()){
                header("Content-Type: application/json");
                http_response_code(200);
                return json_encode([
                    "error"=>false,
                    "message"=>"Datos del usuario $id",
                    "data"=>$usuario,
                    "code"=>200
                ]);
            }else{
                $titulo = "Datos del usuario $id";
                $descripcion = "Información almacenada de la base de datos del usuario $id";
                include_once "app/Views/backend/admin.users.show.php";
            }

        }

    }

    public function create()
    {
        $titulo = "Creación de un nuevo usuario";
        $descripcion = "Inserta todos los datos del formulario para crear un usuario";
        include_once "app/Views/backend/admin.users.create.php";
    }

    public function update($id)
    {

        $datosAModificar=
            json_decode(file_get_contents("php://input"),true);

        $datosAModificar['id']=$id;

        $validacion = User::validateUserUpdate($datosAModificar);
        if (is_array($validacion)){
            //Se ha producido un error de validación
            header("Content-Type: application/json");
            http_response_code(400);
            return json_encode([
                "error"=>true,
                "message"=>"Error validando los datos",
                "data"=>$validacion,
                "code"=>400
            ]);

        }else{

            //Hemos pasado la validación de los datos

            //Leer un usuario de la base de datos
            $usuarioAntiguo = UserModel::getUserById($id);

            if($usuarioAntiguo===false){
                    header("Content-Type: application/json");
                    http_response_code(404);
                    return json_encode([
                        "error"=>true,
                        "message"=>"Usuario no encontrado",
                        "code"=>404
                   ]);

            }else {

                $usuarioNuevo = User::updateFromArray($usuarioAntiguo, $datosAModificar);

                if (UserModel::updateUser($usuarioNuevo)) {
                    header("Content-Type: application/json");
                    http_response_code(200);
                    return json_encode([
                        "error"=>false,
                        "message"=>"Usuario modificado correctamente",
                        "code"=>200
                    ]);


                } else {
                    header("Content-Type: application/json");
                    http_response_code(404);
                    return json_encode([
                        "error"=>true,
                        "message"=>"Usuario no modificado",
                        "code"=>404
                    ]);
                }
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
                if (Auxiliar::isApiRequest()){
                    header("Content-Type: application/json");
                    http_response_code(409);
                    return json_encode([
                        "error"=>true,
                        "message"=>"Error al crear el usuario en la base de datos",
                        "code"=>409
                    ]);
                }else{
                    $error= "Ha ocurrido un  error de almacenamiento";
                    include_once "app/Views/error.php";
                }

            }else{
                if (Auxiliar::isApiRequest()){
                    header("Content-Type: application/json");
                    http_response_code(201);
                    return json_encode([
                        "error"=>false,
                        "message"=>"Usuario creado correctamente",
                        "code"=>201
                    ]);
                }else{
                    header("Location: /user");
                }

            }
        }else{
            //Ha habido errores de validación
            if (Auxiliar::isApiRequest()){
                header("Content-Type: application/json");
                http_response_code(400);
                return json_encode([
                    "error"=>true,
                    "message"=>"Validación de datos de usuario incorrecta",
                    "data"=>$validacion,
                    "code"=>400
                ]);
            }else{
                $error= stringify($validacion);
                include_once "app/Views/error.php";
            }

        }

    }

    public function edit($id)
    {
        //Necesito recuperar el usuario de la base de datos
        $usuario = UserModel::getUserById($id);

        if (!$usuario){
            $error="No se ha podido encontrar el usuario en la base de datos";
            include_once "app/View/error.php";
        }else{
            //Voy a incluir la vista de edición de datos
            include_once "app/Views/backend/admin.users.edit.php";
        }

    }

    public function destroy($id)
    {

        if(UserModel::deleteUser($id)){
            //Si se ha borrado correctamente
            header("Content-Type: application/json");
            http_response_code(200);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>false,
                "message"=>"Usuario eliminado correctamente",
                "code"=>200
            ]);

        }else{
            //Si ha ocurrido algun fallo
            header("Content-Type: application/json");
            http_response_code(404);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>true,
                "message"=>"No se ha podido eliminar el usuario",
                "code"=>404
            ]);
        }

    }

    public function login(){
        //Muestra el formulario para poder hacer login
        include_once "app/Views/frontend/login.html";
    }

    public function signin(){

        //Valida el usuario
        $usuario = UserModel::getUserByEmail($_POST['email']);
        if ($usuario){
            //Guarda en la sesión los datos necesarios para almacenar el usuario
            if (password_verify($_POST['password'],$usuario->getPassword())){
                //La contraseña ha sido verificada

                $_SESSION['user']=$usuario;
                header('Location: /user');

            }else{
                $error="La contraseña es incorrecta";
                include_once "app/View/error.php";
                header("Refresh:5; url=/signin");
            }


        }else{
            $error="No se ha podido encontrar el usuario";
            include_once "app/View/error.php";
            header("Refresh:5; url=/signin");
        }


    }

    public function logout(){
        session_destroy();
        header('Location: /');
    }
}