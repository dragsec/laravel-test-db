<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Utenti;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 
Route::get('utenti', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Utenti::all();
});
 
Route::get('utenti/{id}', function($id) {
    return Article::find($id);
});

Route::post('utenti', function(Request $request) {
    return Article::create($request->all);
});

Route::put('utenti/{id}', function(Request $request, $id) {
    $utenti = Utenti::findOrFail($id);
    $utenti->update($request->all());

    return $article;
});

Route::delete('utenti/{id}', function($id) {
    Utenti::find($id)->delete();

    return 204;
});

Route::get('utenti', 'UtentiController@index');
Route::get('utenti/{utenti}', 'UtentiController@show');
Route::post('utenti', 'UtentiController@store');
Route::put('utenti/{utenti}', 'UtentiController@update');
Route::delete('utenti/{utenti}', 'UtentiController@delete');