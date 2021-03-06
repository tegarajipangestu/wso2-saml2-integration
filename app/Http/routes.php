<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web','auth']], function () {
	Route::get('/', 'PagesController@index');
	Route::get('/logout', function() {
		// return Auth::logout();
		return Saml2::logout();
	});
	Route::resource('users', 'UsersController', ['parameters' => [
    'users' => 'username'
    ]]);
	Route::resource('roles', 'RolesController');
	Route::resource('post', 'PostsController');
});
Route::get('generate-wsdl', 'GenerateWsdlController@index');
Route::get('/login', function() {
		return Saml2::login(URL::full());
	});
Route::group(['prefix' => 'example'], function() {
	Route::get('/', function() {
			return view('example');
	});
	Route::group(['prefix' => 'rumpun-jabatan'], function() {
		Route::get('query-rumpun', 'ExampleRumpunJabatanController@queryRumpun');
		Route::get('query-jabatan', 'ExampleRumpunJabatanController@queryJabatan');
	});
	Route::group(['prefix' => 'pegawai'], function() {
		Route::get('query-pegawai', 'ExamplePegawaiController@queryPegawai');
		Route::get('query-atasan', 'ExamplePegawaiController@queryAtasan');
		Route::get('query-skpd', 'ExamplePegawaiController@querySKPD');
		Route::get('query-pejabat-by-skpd', 'ExamplePegawaiController@queryPejabatBySKPD');
	});
});
/*
Route::group(['generate-wsdl', function() {
	Route::get('/{wsdlUrl}', 'GenerateWsdlController@index');
});
*/
