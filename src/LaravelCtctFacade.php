<?php
namespace ShravanJbp\LaravelCtct;

use \Illuminate\Support\Facades\Facade;

class LaravelCtctFacade extends Facade {

    protected static function getFacadeAccessor() 
    {
        return 'laravelctct';
    }
}