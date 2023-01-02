<?php

namespace Kaanyakar\LaravelPos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelPos
 * @package Kaanyakar\LaravelPos\Facades
 */
class LaravelPos extends Facade {

    protected static function getFacadeAccessor() { return 'laravelpos'; }

}
