<?php

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
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {
    
    return Hash::make("123456789");
    
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/sliders',                                'Admin\SlidersController@index');
    Route::get('/admin/sliders/create',                         'Admin\SlidersController@create');
    Route::post('/admin/sliders',                               'Admin\SlidersController@store');
    Route::get('/admin/sliders/{slider}/edit',                  'Admin\SlidersController@edit')->name('admin/sliders/edit');
    Route::post('/admin/sliders/bulk-destroy',                  'Admin\SlidersController@bulkDestroy')->name('admin/sliders/bulk-destroy');
    Route::post('/admin/sliders/{slider}',                      'Admin\SlidersController@update')->name('admin/sliders/update');
    Route::delete('/admin/sliders/{slider}',                    'Admin\SlidersController@destroy')->name('admin/sliders/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/trips-distinations',                     'Admin\TripsDistinationsController@index');
    Route::get('/admin/trips-distinations/create',              'Admin\TripsDistinationsController@create');
    Route::post('/admin/trips-distinations',                    'Admin\TripsDistinationsController@store');
    Route::get('/admin/trips-distinations/{tripsDistination}/edit','Admin\TripsDistinationsController@edit')->name('admin/trips-distinations/edit');
    Route::post('/admin/trips-distinations/bulk-destroy',       'Admin\TripsDistinationsController@bulkDestroy')->name('admin/trips-distinations/bulk-destroy');
    Route::post('/admin/trips-distinations/{tripsDistination}', 'Admin\TripsDistinationsController@update')->name('admin/trips-distinations/update');
    Route::delete('/admin/trips-distinations/{tripsDistination}','Admin\TripsDistinationsController@destroy')->name('admin/trips-distinations/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/trips',                                  'Admin\TripsController@index');
    Route::get('/admin/trips/create',                           'Admin\TripsController@create');
    Route::post('/admin/trips',                                 'Admin\TripsController@store');
    Route::get('/admin/trips/{trip}/edit',                      'Admin\TripsController@edit')->name('admin/trips/edit');
    Route::post('/admin/trips/bulk-destroy',                    'Admin\TripsController@bulkDestroy')->name('admin/trips/bulk-destroy');
    Route::post('/admin/trips/{trip}',                          'Admin\TripsController@update')->name('admin/trips/update');
    Route::delete('/admin/trips/{trip}',                        'Admin\TripsController@destroy')->name('admin/trips/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/offers',                                 'Admin\OffersController@index');
    Route::get('/admin/offers/create',                          'Admin\OffersController@create');
    Route::post('/admin/offers',                                'Admin\OffersController@store');
    Route::get('/admin/offers/{offer}/edit',                    'Admin\OffersController@edit')->name('admin/offers/edit');
    Route::post('/admin/offers/bulk-destroy',                   'Admin\OffersController@bulkDestroy')->name('admin/offers/bulk-destroy');
    Route::post('/admin/offers/{offer}',                        'Admin\OffersController@update')->name('admin/offers/update');
    Route::delete('/admin/offers/{offer}',                      'Admin\OffersController@destroy')->name('admin/offers/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/galleries',                              'Admin\GalleriesController@index');
    Route::get('/admin/galleries/create',                       'Admin\GalleriesController@create');
    Route::post('/admin/galleries',                             'Admin\GalleriesController@store');
    Route::get('/admin/galleries/{gallery}/edit',               'Admin\GalleriesController@edit')->name('admin/galleries/edit');
    Route::post('/admin/galleries/bulk-destroy',                'Admin\GalleriesController@bulkDestroy')->name('admin/galleries/bulk-destroy');
    Route::post('/admin/galleries/{gallery}',                   'Admin\GalleriesController@update')->name('admin/galleries/update');
    Route::delete('/admin/galleries/{gallery}',                 'Admin\GalleriesController@destroy')->name('admin/galleries/destroy');
});

/////////////////////////// Client ///////////////////////////////

Route::get("/" , 'Client\HomeController@index');
Route::get("/contact" , 'Client\ContactController@index');
Route::post("/contact" , 'Client\ContactController@postInquiry');
Route::get("/galleries" , 'Client\GalleryController@index');
Route::get("/galleries/{slug}" , 'Client\GalleryController@distImages');
Route::get("/reviews" , 'Client\ReviewsController@index');
Route::get("/offers"  , 'Client\OffersController@index');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/contacts',                               'Admin\ContactsController@index');
    Route::get('/admin/contacts/create',                        'Admin\ContactsController@create');
    Route::post('/admin/contacts',                              'Admin\ContactsController@store');
    Route::get('/admin/contacts/{contact}/edit',                'Admin\ContactsController@edit')->name('admin/contacts/edit');
    Route::post('/admin/contacts/bulk-destroy',                 'Admin\ContactsController@bulkDestroy')->name('admin/contacts/bulk-destroy');
    Route::post('/admin/contacts/{contact}',                    'Admin\ContactsController@update')->name('admin/contacts/update');
    Route::delete('/admin/contacts/{contact}',                  'Admin\ContactsController@destroy')->name('admin/contacts/destroy');
});