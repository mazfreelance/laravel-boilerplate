<?php

namespace Infrastructure\Enums;

use BenSampo\Enum\Enum;
use Illuminate\Support\Collection;

abstract class BaseEnum extends Enum
{
    public static function getCollection()
    {
        return Collection::make(self::getInstances())->values();
    }
}
