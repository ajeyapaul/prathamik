<?php

namespace Ajeya\Prathamik;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajeya\Prathamik\Skeleton\SkeletonClass
 */
class PrathamikFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'prathamik';
    }
}
