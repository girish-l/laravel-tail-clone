<?php

namespace Girishl\Tail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Girishl\Tail\Tail
 */
class Tail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Girishl\Tail\Tail::class;
    }
}
