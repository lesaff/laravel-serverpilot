<?php

namespace Lesaff\LaravelServerPilot\Facades;

use Illuminate\Support\Facades\Facade;

class ServerPilot extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    {
    	return 'Lesaff\LaravelServerPilot\ServerPilot';
    }
}