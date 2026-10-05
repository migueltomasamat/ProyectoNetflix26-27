<?php

namespace Matomas\Proyecto1\Class;

use Ramsey\Uuid\Uuid;

class Content
{
    private string $uuid;
    private string $name;

    public function __construct(string $uuid)
    {
        $this->uuid=$uuid;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Content
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Content
    {
        $this->name = $name;
        return $this;
    }



}