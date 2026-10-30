<?php

namespace Matomas\Proyecto1\Class;

class Auxiliar
{
    public static function isApiRequest():bool{
        $partes = explode('/',$_SERVER['REQUEST_URI']);
        var_dump($partes);
        if ($_SERVER['REQUEST_URI']){
            $partes = explode('/',$_SERVER['REQUEST_URI']);

        }

        return false;

    }

}