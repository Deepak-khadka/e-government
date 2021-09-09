<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/reset', function () {
    return view('auth.passwords.email');
})->name('reset');
/* Route For HomePage*/
Route::group(

    ['namespace' => 'Neputer\\Controller\\Frontend\\'],

    function () {

        Route::get('/',  ['as'=>'user.dashboard', 'uses'=>'HomeController@index']);
        Route::get('/loggedIn-user',  ['as'=>'user.dashboard', 'uses'=>'HomeController@getLoggedInUser'])->name('loginUser');
        Route::get('/profile', function (){
            return view('profile'
            );
        })->name('user.profile');


    });

Route::group(
    ['middleware' => ['auth','verify.admin'],
        'prefix' => 'admin/',
        'as' => 'admin.',
        'namespace' => 'Neputer\\Controller\\Admin\\'],

    function () {

        Route::resource('category', 'CategoryController');
        Route::get('/dashboard', ['as' => 'dashboard.index', 'uses' => 'PopulationController@index']);

        Route::get('home', ['as' => 'profile', 'uses' => 'CategoryController@index']);

        /* Hospital Web  Path*/
        Route::resource('hospital', 'HospitalController');

        /* User Data Web  Path*/
        Route::resource('population', 'PopulationController');

        /* Demo*/
        Route::resource('municipality', 'MunicipalityController');
        Route::get('/getMunicipality', ['as' => 'getMunicipality', 'uses' => 'MunicipalityController@getMunicipality']);

        /* District */
        Route::resource('district', 'DistrictController');
        Route::get('/getDistrict', ['as' => 'getDistrict', 'uses' => 'DistrictController@district']);

    });



