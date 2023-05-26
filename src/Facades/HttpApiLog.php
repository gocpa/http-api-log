<?php

namespace GoCPA\HttpApiLog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GoCPA\HttpApiLog\HttpApiLog
 */
class HttpApiLog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GoCPA\HttpApiLog\HttpApiLog::class;
    }
}
