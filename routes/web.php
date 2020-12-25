
<?php

  use App\Http\Controllers\PizzaController;

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

// Route::get('/pizzas', 'PizzaController@index');

// Route::get('/pizzas/{id}', 'PizzaController@show');

Route::get('pizzas',[PizzaController::class, 'index']);
Route::get('pizzas/{id}',[PizzaController::class, 'show']);


// Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);

// use App\Http\Controllers\TestController;
// Route::get('test',[TestController::class, 'test']);