<?php

use App\Http\Controllers\ExportRidesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 * These routes use the root namespace 'App\Http\Controllers\Web'.
 */

Route::get('objects/{object}/readings', 'ObjectsController@readingsIndex')->name('objects.readings.index');
Route::get('objects/{object}/readings/create', 'ObjectsController@readingsCreate')->name('objects.readings.create');
Route::delete('objects/{object}/readings/{reading}', 'ObjectsController@readingsDelete')->name('objects.readings.destroy');
Route::resource('objects', 'ObjectsController');
Route::resource('reading_types', 'ReadingTypeController');
Route::resource('invoice_types', 'InvoiceTypesController');
Route::resource('areas', 'AreasController');

Route::namespace('Web')->group(function () {

    // All the folder based web routes
    include_route_files('web');


    Route::get('/', 'FrontPageController@index')->name('index');
    Route::get('/driverpage', 'FrontPageController@driverp')->name('driverpage');
    Route::get('/howdriving', 'FrontPageController@howdrive')->name('howdriving');
    Route::get('/driverrequirements', 'FrontPageController@driverrequirement')->name('driverrequirements');
    Route::get('/safety', 'FrontPageController@safetypage')->name('safety');
    Route::get('/serviceareas', 'FrontPageController@serviceareaspage')->name('serviceareas');
    Route::get('/compliance', 'FrontPageController@complaincepage')->name('complaince');
    Route::get('/privacy', 'FrontPageController@privacypage')->name('privacy');
    Route::get('/terms', 'FrontPageController@termspage')->name('terms');
    Route::get('/dmv', 'FrontPageController@dmvpage')->name('dmv');
    Route::get('/contactus', 'FrontPageController@contactuspage')->name('contactus');
    Route::post('/contactussendmail', 'FrontPageController@contactussendmailadd')->name('contactussendmail');
    Route::get('exportrides', [ExportRidesController::class, 'index']);

    // Website home route
    //Route::get('/', 'HomeController@index')->name('home');


});
