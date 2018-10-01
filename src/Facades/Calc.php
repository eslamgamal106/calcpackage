<?php

namespace MyVendor\Calc\Facades;

use Illuminate\Support\Facades\Facade;

class Calc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'calc';
    }
}
