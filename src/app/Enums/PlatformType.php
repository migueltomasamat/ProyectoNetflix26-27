<?php

namespace Matomas\Proyecto1\Enums;

enum PlatformType
{
    CASE PS5;
    CASE XBOX;
    CASE PC;
    CASE SWITCH2;

    public static function fromString(string $platform):self{

        return match(strtoupper($platform)){
            "PS5"=> self::PS5,
            "XBOX"=> self::XBOX,
            "PC"=> self::PC,
            "SWITCH2"=> self::SWITCH2,
            default=>self::PS5
        };


    }

}
