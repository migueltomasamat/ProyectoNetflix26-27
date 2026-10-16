<?php

namespace Matomas\Proyecto1\Models;

use PDO;
use PDOException;

class UserModel
{

    public static function getUsers():array{


        $conexion =
            new PDO("mysql:host=mariadb;dbname=netflix",
                "miguel",
                "leugim");
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);

        $stmt->execute();

        $resultado=$stmt->fetchAll();

        var_dump($resultado);

        return [];
    }

}