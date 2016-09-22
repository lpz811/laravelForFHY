<?php

namespace App\Facades\Backend;

use Illuminate\Support\Facades\Facade;

/**
 * This is the menu repository facade class
 */
class MenuRepository extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'menurepository';
    }
}
