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

   public function __construct()
   {
       parent::__construct(Uuid::uuid4());

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