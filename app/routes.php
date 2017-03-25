<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'HomeController@getIndex'
]);
Route::get('/gal', [
    'uses' => 'GalController@getIndex'
]);
Route::get('/galleryf', [
	'uses' => 'GalleryfController@getIndex'
]);
Route::get('/gallery/{link}', [
    'uses' => 'GalleryDetailController@getIndex'
]);
Route::get('/blogf', [
    'uses' => 'BlogfController@getIndex'
]);
Route::get('/blog/{link}', [
    'uses' => 'BlogDetailController@getIndex'
]);
Route::get('/aboutus', [
    'uses' => 'AboutusController@getIndex'
]);
Route::get('/contactus', [
    'uses' => 'ContactusController@getIndex'
]);
Route::get('/user', [
    'uses' => 'UserController@getIndex',
    "before" => 'auth'
]);
Route::get('/slider', [
    'uses' => 'SliderController@getIndex',
    "before" => 'auth'
]);
Route::get('/blog', [
    'uses' => 'BlogController@getIndex',
    "before" => 'auth'
]);
Route::get('/gallery', [
    'uses' => 'GalleryController@getIndex',
    "before" => 'auth'
]);
Route::get('/ads', [
    'uses' => 'AdsController@getIndex',
    "before" => 'auth'
]);
// Route::get('/', function(){
// 	MsUser::create(array(
// 		'username'=>'tes',
// 		'password'=>Hash::make('tes')

// 	));
// });
//Route::get('/', 'HomeController@getIndex');
Route::get('login', 'LoginController@getIndex');
Route::post('login', 'LoginController@doLogin');
Route::get('insert', [
    'uses' => 'InsertController@getIndex',
    "before" => 'auth'
]);
Route::post('add', 'InsertController@doInsert');
Route::get('update/{id}', [
    'uses' => 'UpdateController@getIndex',
    "before" => 'auth'
]);
Route::post('edit', 'UpdateController@doUpdate');
Route::get('updateS/{id}', [
    'uses' => 'UpdateSController@getIndex',
    "before" => 'auth'
]);
Route::post('editS', 'UpdateSController@doUpdate');
Route::get('updateG/{id}', [
    'uses' => 'UpdateGController@getIndex',
    "before" => 'auth'
]);
Route::post('editG', 'UpdateGController@doUpdate');
Route::get('updateB/{id}', [
    'uses' => 'UpdateBController@getIndex',
    "before" => 'auth'
]);
Route::post('editB', 'UpdateBController@doUpdate');
Route::get('updateA/{id}', [
    'uses' => 'UpdateAController@getIndex',
    "before" => 'auth'
]);
Route::post('editA', 'UpdateAController@doUpdate');
Route::get('delete/{id}', [
    'uses' => 'DeleteController@getIndex',
    "before" => 'auth'
]);
Route::get('deleteA/{id}', [
    'uses' => 'DeleteAController@getIndex',
    "before" => 'auth'
]);
Route::get('deleteB/{id}', [
    'uses' => 'DeleteBController@getIndex',
    "before" => 'auth'
]);
Route::get('deleteG/{id}', [
    'uses' => 'DeleteGController@getIndex',
    "before" => 'auth'
]);
Route::get('deleteS/{id}', [
    'uses' => 'DeleteSController@getIndex',
    "before" => 'auth'
]);
Route::get('insert', 'InsertController@getIndex');
Route::get('logout', function(){
	Auth::logout();
	//print_r("tes");die();
	return Redirect::action('LoginController@getIndex');
});
Route::get('insertS', [
    'uses' => 'InsertSController@getIndex',
    "before" => 'auth'
]);
Route::post('addS', 'InsertSController@doInsert');

Route::get('insertG', [
    'uses' => 'InsertGController@getIndex',
    "before" => 'auth'
]);
Route::post('addG', 'InsertGController@doInsert');

Route::get('insertA', [
    'uses' => 'InsertAController@getIndex',
    "before" => 'auth'
]);
Route::post('addA', 'InsertAController@doInsert');
Route::get('insertB', [
	'uses' => 'InsertBController@getIndex',
	"before" => 'auth'
]);
Route::post('addB', 'InsertBController@doInsert');
// Route::get('cache', function(){
	
// 	Cache::put('key', 'tes', 1);
// 	print_r(Cache::get('key'));die();
//});
// Route::get('insert', function()
// {
// 	return View::make('insert');
// });

//Route::get('/authors',array('uses' => 'AuthorsController@getIndex'));
	// Route::get('/', function()
	// {
	// 	//$name = DB::Connection()->getDatabaseName();
	// 	//print_r($name);die();
	// 	//return 'Connected to '.$name;
	// 	return View::make('insert');
	// });

?>