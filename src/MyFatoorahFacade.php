<?php

namespace Nagi1\MyFatoorah;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nagi1\MyFatoorah\MyFatoorah
 */
class MyFatoorahFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-myfatoorah';
    }
}
