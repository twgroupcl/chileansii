<?php

namespace Twgroupcl\Chileansii;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Twgroupcl\Chileansii\Skeleton\SkeletonClass
 */
class ChileansiiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chileansii';
    }
}
