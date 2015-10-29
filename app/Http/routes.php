<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', function ()
{
	$faker = Faker\Factory::create();
	$limit = 10;

	for ($i=0; $i < $limit; $i++) { 
		echo $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No ' . $faker->phoneNumber . '<br>';
	}
});
