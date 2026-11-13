<?php

namespace Matomas\Proyecto1\Models;

use Matomas\Proyecto1\Class\DB;
use Matomas\Proyecto1\Class\Pelicula;
use PDO;

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
            $pelicula = Pelicula::createFromArray($resultado);
            $pelicula->setType(PeliculaModel::getPeliculaGeneres($pelicula));

            return $pelicula;
        }

    }

    public static function getPeliculaGeneres(string $uuidPelicula):array{
        try{
            $conexion = new DB();

        }catch (\PDOException $e){
            echo $e->getMessage();
        }

        $sql = "SELECT genere.name FROM peliculas join pelicula_genere on uuid=uuid_pelicula 
    join genere on id=id_genere where uuid=:uuid";

        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("uuid",$uuidPelicula);

        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_COLUMN);

        return $resultado;

    }

    public static function getAllMovies():array
    {
        try{
            $conexion = new DB();

        }catch (\PDOException $e){
            echo $e->getMessage();
        }

        $sql = "SELECT * FROM peliculas";
        $stmt=$conexion->prepare($sql);

        $stmt->execute();

        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if ($stmt->rowCount()===0){
            return [];
        }else{
            $peliculas=[];
            foreach ($resultado as $movie){

                $movie['type']=PeliculaModel::getPeliculaGeneres($movie['uuid']);
                $pelicula = Pelicula::createFromArray($movie);
                $peliculas[]=$pelicula;

            }
            return $peliculas;
        }

    }


}