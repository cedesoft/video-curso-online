<?php

use App\Http\Controllers\documentoslegales;
use Facade\FlareClient\View;
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
    return View('welcome');
});
//Route::post('api/v1/course', 'CourseController@store');
//Route::get('api/v1/course', 'CourseController@index');
//Route::put('api/v1/course/{id}', 'CourseController@update');
//Route::delete('api/v1/course/{id}', 'CourseController@destroy');

//Route::post('api/courses', 'CourseController@store');
//Route::get('api/courses', 'CourseController@index');
//Route::update('api/courses/{course_id}', 'CourseControllerindex@update');
Auth::routes();

// Route::group(['middleware' => ['auth']], function () {
//     ver curso
//     comprar
//     editar perfil
//     favoritos
//     crear_curso
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'ProfileController');
Route::resource('course', 'CourseController');
Route::resource('shoppingcart', 'PaymentController');
Route::resource('paymentCreditcard', 'ProfileController');
Route::resource('paymentPaypal', 'RegisterController');
Route::get('mycourses/{id}', 'CourseController@courses')->name('mycourses');
Route::resource('favorites', 'FavoriteController');
Route::get('viewcourseintroduction/{id}', 'VideoController@coursesvideos')->name('viewcourseintroduction');
Route::get('viewcoursevideo/{id}', 'VideoController@mostrar')->name('viewcoursevideo');
Route::get('video/{id}' ,'VideoController@showvideo')->name('video');
Route::post('comment', 'VideoController@addcomment')->name('comment');
Route::get('admincourses', 'CourseController@allcourses')->name('admincourses');
Route::get('admincourses2', 'CourseController@userscourses')->name('admincourses2');
Route::get('admincourses3', 'CourseController@favcourses')->name('admincourses3');
Route::get('uploadcourse', 'CourseController@admincourses')->name('uploadcourses');
Route::post('uploadvideo', 'CourseController@crearvideo')->name('uploadvideo');
Route::resource('vide', 'VideoController');
Route::resource('adminfiles', 'FileController');
Route::put('updatename/{id}', 'ProfileController@actualizar')->name('updatename');
Route::put('updateemail', 'ProfileController@actualizarcorreo')->name('updateemail');
Route::put('updatepassword' ,'ProfileController@actualizarcon')->name('updatepassword');
Route::resource('Registeruser', 'RegisterController');
Route::resource('recoverpass', 'PassController');
Route::get('search', 'CourseController@search')->name('search');
Route::get('/add-to-cart/{id}', 'CourseController@getAddToCart')->name('course.addToCart');
Route::get('user_profile/{id}', 'ProfileController@prof')->name('user_profile');
Route::get('coursedetail/{id}', 'CourseController@info')->name('coursedetail');
Route::post('calification','CourseController@calif')->name('calification');
Route::get('paypal','paypalController@payWithPayPal');
Route::get('paypal/status','paypalController@payPalStatus');

//Route::get('preguntasfrecuentes','preguntasfrecuentesController');
//Route::get('terminosycondiciones','terminosycondicionesController');

