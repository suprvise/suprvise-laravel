<?php

namespace Suprvise\SuprviseLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Suprvise\SuprviseLaravel\Skeleton\SkeletonClass
 */
class SuprviseLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'suprvise-laravel';
    }
}
