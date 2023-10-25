<?php
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
// Dashboard view
Route::get('/', [WeatherController::class, 'dashboard'])->name('dashboard');

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
