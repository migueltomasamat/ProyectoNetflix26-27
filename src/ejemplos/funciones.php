<?php

const DEFAULT_PASSWORD_LENGTH = 16;
const CHAR_ARRAY = ['a','b','c'];
const NUM_ARRAY = ['1','2','3','4','5','6','7','8','9','0'];
const SYMBOL_ARRAY = ['ñ',';',',',':','ç'];

const CHARACTERS =[
    'char'=>CHAR_ARRAY,
    'num'=>NUM_ARRAY,
    'symbol'=>SYMBOL_ARRAY
];

function create_pass(
    int $longitud=DEFAULT_PASSWORD_LENGTH,
    bool $numeros=true,
    bool $letras=true,
    bool $simbolos=true)
:string{

    $generated_pass = '';
    if ($numeros===false && $letras===false && $simbolos===false){
        $letras=true;
    }

    //Repetir tantas veces como la longitud del password
    while (strlen($generated_pass)<$longitud){

        //Quiero seleccionar si voy a utilizar un numero, una letra o un simbolo
        $tipo_elemento = mt_rand(1,3);


        //Cuando tenga seleccionado el tipo de caracter, quiero seleccionar entre los caracteres disponibles
        if ($tipo_elemento===1 && $letras===true){
            $generated_pass.=CHAR_ARRAY[mt_rand(0,count(CHAR_ARRAY)-1)];
        }else if ($tipo_elemento===2 && $numeros===true){
            $generated_pass.=NUM_ARRAY[mt_rand(0,count(NUM_ARRAY)-1)];
        }else{
            if($simbolos===true){
                $generated_pass .= SYMBOL_ARRAY[mt_rand(0, count(SYMBOL_ARRAY)-1)];
            }
        }
    }

    return $generated_pass;
}
