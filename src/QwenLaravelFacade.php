<?php

namespace Qwen\QwenLaravel;

use Illuminate\Support\Facades\Facade;

class QwenLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'qwen-laravel';
    }
}
