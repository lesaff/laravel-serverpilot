# ServerPilot PHP API Wrapper for Laravel 5
Version: 1.0.0

This is a Laravel 5.x wrapper for Dave Rogers' excellent [ServerPilot PHP API](https://github.com/daverogers/serverpilot-php). It comes with Service Container binding and Facade alias.

## Installation
1. Run `composer require lesaff/laravel-serverpilot`
2. Grab ServerPilot's API ID and Key from your SP's admin panel
3. Set `SERVERPILOT_API_ID` and `SERVERPILOT_API_KEY` in your `.env` file
4. Edit `app/config/app.php`,

	add the following to your providers' array
	```
	Lesaff\LaravelServerPilot\ServerPilotServiceProvider::class,
	```
	add the following to your class aliases array
	```
	'SP' => Lesaff\LaravelServerPilot\Facades\ServerPilot::class,
	```

## Usage

As a **Facade**
```
$servers = \SP::server_list();
```

As a **Dependency injection**
```
Route::get('/servers', function (\Lesaff\LaravelServerPilot $sp) {
	$servers = $sp->server_list();
});
```

For full PHP API usage, please refer to https://github.com/daverogers/serverpilot-php

by Rudy Affandi (2017)  
https://githubb.com/lesaff/laravel-serverpilot