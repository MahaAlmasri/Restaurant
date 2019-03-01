<?php
use App\Dish;
use Illuminate\Support\Facades\Input;
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
    Session::put('order', null);
    return view('welcome');
});
Route::get('/home', function () {
    $dishes=Dish::all();
    return view('/home')->withDetails($dishes)->withMessage('You are logged in!');
})->name('home');


Route::resource('dishes', 'DishController');
Route::resource('favorites', 'FavoriteController');
Route::resource('categories', 'CategoryController');
Route::get('/favorites/{dish}/index','FavoriteController@store')->name('addtofavorite');
Route::get('/favorites','FavoriteController@index');
//Route::delete('/favorites/{favorite}','FavoriteController@destroy');




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{user}/edit','UserController@edit');

Route::patch('/auth/{user}/update', ['as' =>'auth.update', 'uses' => 'UserController@update']);



Route::get('/admin', 'AdminController@admin')->name('admin');



    Route::resource('payments', 'PaymentController');
   // Route::resource('orders', 'OrderController');
 // Route::resource('orders', 'OrderController');

   // Route::resource('orderDetails', 'OrderDetailsController');
    //Route::post('/orderDetails/index','OrderDetailsController@store');
    /* Route::get('/orders/create',function(){
        $dish=Input::get('dish');
        dd(Input::get('dish'));
        return view('/orders/create');

    });*/
Route::any('/search',function(){

    $q = Input::get ( 'q' );
    $dishes = Dish::where('name','LIKE','%'.$q.'%')->get();
    if(count($dishes) > 0)
    return view('/orders/create')->withDetails($dishes);
    else return view ('/orders/create')->withMessage('No dishes found. Try to search again !');
});

/* Route::get('/orderDetails/index','OrderDetailsController@index');
Route::post('/orderDetails/index','OrderDetailsController@store');
Route::get('/orderDetails/create','OrderDetailsController@create');
Route::get('/orderDetails/{product}','OrderDetailsController@show');
Route::get('/orderDetails/{product}/edit','OrderDetailsController@edit');
Route::patch('/orderDetails/{product}','OrderDetailsController@update');
Route::delete('/orderDetails/{product}','OrderDetailsController@destroy'); */

Route::get('/orders/index','OrderController@index');
Route::post('/orders/create','OrderDetailsController@store')->name('order');
Route::get('/orders/{dish}/create','OrderController@create');
Route::get('/orders/{order}','OrderController@show');
Route::get('/orders/{order}/edit','OrderController@edit');
Route::patch('/orders/{order}','OrderController@update');
Route::delete('/orders/{order}','OrderController@destroy');
