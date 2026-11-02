<?php

namespace Matomas\Proyecto1\Class;

class Auxiliar
{
    public static function isApiRequest():bool{
        $partes = explode('/',$_SERVER['REQUEST_URI']);
        return in_array("api",$partes);
    }

}