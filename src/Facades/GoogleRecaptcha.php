<?php

namespace ABCDebo\GoogleRecaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleRecaptcha extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
