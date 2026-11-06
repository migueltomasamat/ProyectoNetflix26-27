<?php

namespace Matomas\Proyecto1\Models;

use Matomas\Proyecto1\Class\DB;
use Matomas\Proyecto1\Class\Pelicula;

class PeliculaModel
{


    public static function getPeliculaByUuid(string $uuid):Pelicula|false{

        try{
            $conexion = new DB();

        }catch (\PDOException $e){
            echo $e->getMessage();
        }

        $sql = "SELECT * FROM peliculas where uuid=:uuid";
        $stmt=$conexion->prepare($sql);

        $stmt->bindValue("uuid",$uuid);

        $stmt->execute();

        $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($stmt->rowCount()===0){
            return false;
        }else{
            return Pelicula::createFromArray($resultado);
        }

    }

    public static function


}