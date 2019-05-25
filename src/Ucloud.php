<?php

namespace Knight\Ucloud;

use Illuminate\Support\Facades\Facade;

class Ucloud  extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ucloud';
    }

}
