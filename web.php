<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\blog;
use App\Http\Controllers\form;

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

Route::get('/', function () {
    return view('welcome');
});

/*
general Route code:- 

Route::get('URLName',[ControllerName::class, 'FunctionName']);
*/


//Route::get('create',[blog::class, 'create']);

//Route::post('store',[blog::class, 'store']);


//Route for form
Route::get('form/register',[form::class, 'formview']);

Route::post('form/storedata',[form::class, 'storedata']);
