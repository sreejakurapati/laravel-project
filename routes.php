<?php 
	Route::group(['middleware' => ['web']],function(){
	Route::get('/register','App\Modules\module2\Controllers\regController@new');
	Route::get('/login','App\Modules\module2\Controllers\regController@login');
	Route::any('/registerajax','App\Modules\module2\Controllers\regController@registerajax');
	Route::any('/loginajax','App\Modules\module2\Controllers\regController@loginajax');
	Route::get('/homepage','App\Modules\module2\Controllers\regController@homepage');
	Route::any('/newuserajax','App\Modules\module2\Controllers\regController@newuserajax');
	Route::any('/editajax','App\Modules\module2\Controllers\regController@editajax');
	Route::any('/deleteajax','App\Modules\module2\Controllers\regController@deleteajax');
	Route::any('/logoutajax','App\Modules\module2\Controllers\regController@logoutajax');
	});
?>