<?php
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StepOneController;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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




Route::get('/', 'SessionController@index');
Route::get('/login', 'SessionController@login');
Route::post('signin',[UserAuthController::class, 'signin'])->name('views.signin');

Route::get('/logout',[UserAuthController::class, 'logout']);

Route::get('customerprofile',[UserAuthController::class, 'customerprofile']);
Route::get('profile',[UserAuthController::class, 'profile']);

// Route::get('/home', 'SessionController@index');


Route::get('/register', 'SessionController@register');


//   #############    Seller    #############
Route::get('/registerSeller', 'SessionController@registerSeller');
Route::post('createSeller',[SellerController::class, 'createSeller'])->name('views.createSeller');


Route::get('/stepone', 'SessionController@stepOne');
Route::post('stepOneController',[StepOneController::class, 'stepOneController'])->name('views.stepOneController');

Route::get('/steptwo', 'SessionController@stepTwo');
Route::post('stepTwoController',[StepOneController::class, 'stepTwoController'])->name('views.stepTwoController');

Route::get('/sellerdash', 'SessionController@sellerDash');
Route::get('/service', 'SessionController@service');
Route::get('/details', 'SellerController@details');
Route::get('/dashsell', 'SellerController@dashsell');


Route::post('create',[UserAuthController::class, 'create'])->name('views.create');

Route::get('signup',[UserAuthController::class, 'signup']);


Route::get('/termsofservices', 'SessionController@terms');


// Route::get('/', function () {
//     return view('welcome');
// });
