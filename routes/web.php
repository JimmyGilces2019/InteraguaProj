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

Route::get('/', function () {
    return view('welcome');
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/user', 'UsuarioController@index')->name('usuario.consultar');
Route::get('/reports/repOne',function(){
    return view('reports.repOne');
});

Route::get('login/{driver}','Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback','Auth\LoginController@handleProviderCallback');


Route::get('/imprimir','PDFController@PDFGenerate')->name('pdfGenerate');
Route::get('/csvGenerate','PDFController@CSVGenerate')->name('csvGenerate');
