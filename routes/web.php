<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route



// Route::get('/', function () {
//     return view('dashboard');
// });
// Dashboard view
Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');

// login page
// Route::get('login', function () {
//     return view('login');
// })->name('login');

// signup page
// Route::get('signup', function () {
//     return view('signup');
// })->name('signup');

// forgot password form page
// Route::get('forgot-password', function () {
//     return view('forgotPass');
// })->middleware('guest')->name('password.request');

//forgot password form processing route
// Route::post('/forgot-password', [AuthController::class, 'forgot_password'])->middleware('guest')->name('password.email');

// Reset password view
// Route::get('/reset-password/{token}', function (string $token) {
//     return view('resetPass', ['token' => $token]);
// })->middleware('guest')->name('password.reset');

// Reset Password processing route
// Route::post('/reset-password', [AuthController::class, 'reset_password'])->middleware('guest')->name('password.update');

// Auth routes
// Route::controller(AuthController::class)->group(function(){
//     Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
//     Route::get('auth/twitter/callback', 'handleTwitterCallback');
//     Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
//     Route::get('auth/google/callback', 'handleGoogleCallback');
//     Route::post('signup', 'register')->name('register.post');
//     Route::post('signin', 'login')->name('login.post');
//     Route::get('logout', 'logout')->name('logout');
// });


// Route::get('settings/profile-edit', [AuthController::class, 'editView'])->name('profile-edit.page');
// Route::get('settings/profile', [AuthController::class, 'profileView'])->name('profile.page');
// Route::post('profile-upload', [AuthController::class, 'profileUpload'])->name('upload-profile');

//Farmers pannel view
// Route::middleware(['auth'])->get('farmers', function () {
//     return view('farmers');
// })->name('farmers');

// Weather Routes
//Weather Pannel View
Route::get('weather', function () {
    return view('weather');
})->name('weather');
//Weather View pages
Route::get('/current-weather', [WeatherController::class, 'currentWeatherView'])->name('CurrentWeather.page');
Route::get('/weather-forecast', [WeatherController::class, 'weatherForecastView'])->name('weatherForecast.page');

//current weather based on user's location
Route::get('/weather/current-weather', [WeatherController::class, 'currentWeather'])->name('current-weather');
//current weather based on user's city
Route::get('/weather/city-weather', [WeatherController::class, 'userCityWeather']);
//Weather forcast based on user's location
Route::get('/weather/weather-forecast', [WeatherController::class, 'userLocationForcast']);
//Get a weather info of a specific city
Route::post('/weather/weather-in-city/{city}', [WeatherController::class, 'cityWeather'])->name('city-weather');
//Get a weather forcast of a specific city
Route::get('/weather/city-forecast/{city}', [WeatherController::class, 'cityWeatherForcast']);
//Current air pollution in user's location
Route::get('/weather/air-polution', [WeatherController::class, 'currentAirPollution']);


// Sounding page
Route::get('/sounding', [WeatherController::class, 'sounding']);
Route::post('/sounding/get-sounding', [WeatherController::class, 'getSounding'])->name('send.sounding');

//Staff Routes
// Route::middleware(['auth'])->get('staff', function () {
//     return view('staff');
// })->name('staff.page');

//Synchrinization Routes
// Route::middleware(['auth'])->get('synchronization', function () {
//     return view('synchronization');
// })->name('synchronization.page');

//Reports Routes
// Route::middleware(['auth'])->get('report', function () {
//     return view('report');
// })->name('report.page');

//Settings Routes
// Route::middleware(['auth'])->get('settings', function () {
//     return view('settings');
// })->name('settings.page');


// Testing and viewing mail template
Route::get('mailable', function () {
    $user = App\Models\User::find(1);
 
    return new App\Mail\WeatherForecast($user);
});