<?php

namespace Matomas\Proyecto1\Class;

use Couchbase\UpsertUserOptions;
use Matomas\Proyecto1\Class\Content;
use Matomas\Proyecto1\Enums\MovieClassification;
use Ramsey\Uuid\Uuid;

class Pelicula extends Content implements \JsonSerializable
{
    private int $length;
    private string $synopsis;
    private array $type;
    private MovieClassification $classification;

   public function __construct(string $uuid)
   {
       parent::__construct($uuid);
        $this->type = [];

   }

    public static function createFromArray(array $movieData)
    {
        $pelicula = "";
        if(isset($movieData['uuid'])){
            //Queremos crear una instancia desde la base de datos
            $pelicula = new Pelicula($movieData['uuid']);

        }else{
            //Queremos crear una instancia con los datos obtenidos en una peticion post
            $pelicula = new Pelicula(Uuid::uuid4()->toString());
        }

        $pelicula->setName($movieData['name']);
        $pelicula->setLength($movieData['length']);
        $pelicula->setClassification(MovieClassification::fromString($movieData['classification']));
        $pelicula->setSynopsis($movieData['synopsis']);
        $pelicula->setType($movieData['type']);

    }

    public function jsonSerialize(): mixed
    {
        return [
            "uuid"=>$this->uuid,
            "name"=>$this->name,
            "length"=>$this->length,
            "synopsis"=>$this->synopsis,
            "type"=>$this->type
        ];
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): Pelicula
    {
        $this->length = $length;
        return $this;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): Pelicula
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    public function getType(): array
    {
        return $this->type;
    }

    public function setType(array $type): Pelicula
    {
        $this->type = $type;
        return $this;
    }

    public function getClassification(): MovieClassification
    {
        return $this->classification;
    }

    public function setClassification(MovieClassification $classification): Pelicula
    {
        $this->classification = $classification;
        return $this;
    }




}