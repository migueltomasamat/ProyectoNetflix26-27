<?php
//declare(strict_types=1);
function saludo(string $parametro2,float $parametro3,int $parametro1=5,bool $parametro4=false){
    return "Hola";
}


function saludo2(callable $parametro1,){
    return null;
}


saludo("hola",3.4);