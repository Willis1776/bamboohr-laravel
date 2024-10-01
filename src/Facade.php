<?php

namespace Willis1776\BambooHR;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return 'bamboohr';
    }

}