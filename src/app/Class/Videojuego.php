<?php

namespace Matomas\Proyecto1\Class;

use Matomas\Proyecto1\Class\Content;
use Matomas\Proyecto1\Enums\PlatformType;
use Ramsey\Uuid\Uuid;

class Videojuego extends Content implements \JsonSerializable
{

    private PlatformType $platform;
    private int $players;

    /**
     * @param PlatformType $platform
     * @param int $players
     */
    public function __construct()
    {
        parent::__construct(Uuid::uuid4());
    }

    public function getPlatform(): PlatformType
    {
        return $this->platform;
    }

    public function setPlatform(PlatformType $platform): Videojuego
    {
        $this->platform = $platform;
        return $this;
    }

    public function getPlayers(): int
    {
        return $this->players;
    }

    public function setPlayers(int $players): Videojuego
    {
        $this->players = $players;
        return $this;
    }



    public function jsonSerialize(): mixed
    {
        return [
            "uuid"=>$this->uuid,
            "name"=>$this->name,
            "platform"=>$this->platform->name,
            "players"=>$this->players
        ];
    }
}