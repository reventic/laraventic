<?php

namespace Reventic\Laraventic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Hashing\BcryptHasher
 */
class Laraventic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraventic';
    }
}
