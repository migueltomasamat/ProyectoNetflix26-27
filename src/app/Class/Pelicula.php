<?php

namespace Matomas\Proyecto1\Class;

use Couchbase\UpsertUserOptions;
use Matomas\Proyecto1\Class\Content;
use Matomas\Proyecto1\Enums\MovieClassification;
use Ramsey\Uuid\Uuid;

class Pelicula extends Content
{
    private int $length;
    private string $synopsis;
    private array $type;
    private MovieClassification $classification;

   public function __construct()
   {
       parent::__construct(Uuid::uuid4());

   }

}