<?php

use App\Base\Constants\Auth\Role;

Route::middleware('auth:web')->group(function () {
    Route::middleware(role_middleware(Role::DELIVERY_DISPATCHER))->group(function () {
    });

    Route::namespace('DeliveryDispatcher')->group(function () {
        Route::get('dispatch-delivery/dashboard', 'DeliveryDispatcherController@dashboard');
        Route::get('tasks', 'DeliveryDispatcherController@tasks')->name('tasks.index');
        Route::get('fetch/booking-screen/{modal}', 'DeliveryDispatcherController@fetchBookingScreen');

        Route::post('dispatch-delivery/request/create', 'DispatcherCreateRequestController@createRequest');

        Route::get('fetch/dispatch-delivery-request_lists', 'DeliveryDispatcherController@fetchRequestLists');

        // Tasks By Bipin
        Route::get('fetch/tasks', 'DeliveryDispatcherController@tasksList');
        Route::post('store/tasks', 'DeliveryDispatcherController@storeTask');
        Route::delete('delete/tasks/{task}', 'DeliveryDispatcherController@deleteTask');
        Route::post('store/objects', 'DeliveryDispatcherController@storeObject');
        Route::post('import/objects', 'DeliveryDispatcherController@importObject');
        Route::get('fetch/objects', 'DeliveryDispatcherController@objectsList');
        Route::delete('delete/objects/{asset}', 'DeliveryDispatcherController@deleteObject');

        Route::get('request/detail_view/{requestmodel}', 'DeliveryDispatcherController@requestDetailedView')->name('dispatcherRequestDetailView');


        Route::get('dispatch/profile', 'DeliveryDispatcherController@profile')->name('dispatcherProfile');
        Route::get('dispatch/book-now', 'DeliveryDispatcherController@bookNow');
        Route::get('dispatch/book-now-delivery', 'DeliveryDispatcherController@bookNowDelivery');
    });
});
