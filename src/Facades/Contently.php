<?php

namespace Afsharmn\Contently\Facades;

use Illuminate\Support\Facades\Facade;

class Contently extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'contently';
    }
}
