<?php

namespace Matomas\Proyecto1\Enums;

enum MovieClassification
{
    CASE G;
    CASE PG;
    CASE PG_13;
    CASE R;
    CASE NC_17;

    public static function casos(): array
    {
        $casos = [];
        $casos[]=self::G->name;
        $casos[]=self::PG->name;
        $casos[]=self::PG_13->name;
        $casos[]=self::R->name;
        $casos[]=self::NC_17->name;

        return $casos;
    }

    public static function fromString(string $nombre):MovieClassification{

        return match(strtoupper($nombre)){
            "G"=> self::G,
            "PG"=> self::PG,
            "PG_13"=> self::PG_13,
            "R"=> self::R,
            "NC_17"=>self::NC_17,
            default=>self::NC_17
        };
    }




}