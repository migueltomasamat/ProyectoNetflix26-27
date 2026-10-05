<?php

namespace Matomas\Proyecto1\Class;

use Matomas\Proyecto1\Class\Content;
use Matomas\Proyecto1\Enums\PlatformType;
use Ramsey\Uuid\Uuid;

class Videojuego extends Content
{

    private PlatformType $platform;
    private int $players;

    /**
     * @param PlatformType $platform
     * @param int $players
     */
    public function __construct(PlatformType $platform, int $players)
    {
        parent::__construct(Uuid::uuid4());
        $this->platform = $platform;
        $this->players = $players;
    }


}