<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;

//TodoController
Route::resource('todos', TodoController::class);

/**use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index']);**/

Route::get('/welcome', function () {
    return 'Welcome';
});
//Usercontroller
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/', function(){
    return "This is your homepage for the meantime";
});
Route::redirect('Welcome', '/');


Route::get('/about', function () {
    return view('about');
});

//List of Route Options  
/**Route::get('');
Route::post('');
Route::put('');
Route::patch('');
Route::delete('');
Route::options('');
**/
//dd - means die and dump;
//route::get('/users', function(Request $request){
//dd($request);
//return  null;
//});
