<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use RakibDevs\Weather\Exceptions\WeatherException;
use RakibDevs\Weather\Weather;
use Adrianorosa\GeoLocation\GeoLocation;


class WeatherController extends Controller
{
    // Finding Current user's weather information
    // One API call to get all the essential weather data for a specific location of the user
    public function currentWeather(Request $request)
    {
        try {
            // Getting user's latitude and longitude from ip address
            $ip = $request->ip(); //Dynamic IP address
            $details = GeoLocation::lookup($ip);//154.160.26.249
         
            $latitude = $details->getLatitude();
            $longitude = $details->getLongitude();
            $city = $details->getCity();
           
          
           
        }catch (Exception $e){
            $error = $e->getMessage();
            return view('current-weather', compact('error'));
        }
      
       try{
            // Weather info.
            $weather = new Weather();
            $currentInfos = $weather->getCurrentByCord($latitude, $longitude);//we can get the current user's latitude and longitude and use to get live weather info. of the user's location.
            $coord = $currentInfos->coord;
            $weather = $currentInfos->weather;
            $main = $currentInfos->main;
            $base = $currentInfos->base;
            $visibility = $currentInfos->visibility;
            $wind = $currentInfos->wind; //speed,deg,gust. unit is m/s
            $clouds = $currentInfos->clouds;//cloudiness is in %
            $dt = Carbon::parse($currentInfos->dt)->toDayDateTimeString();
            $sys = $currentInfos->sys;
            $timezone = $currentInfos->timezone;
            $id = $currentInfos->id;
            $name = $currentInfos->name;
            $cod = $currentInfos->cod;
            return view('current-weather', compact('city', 'coord', 'weather', 'main', 'base','visibility','wind','clouds','dt','sys','timezone','id','name','cod'));
       } catch (WeatherException $e){
            $error =  $e->getMessage();
            return view('current-weather', compact('error'));
       }
        
    }



    //Get a 5day 3 hour weather forcast for the user's location
    public function userLocationForcast(Request $request)
    {
        try {
            // Getting user's latitude and longitude from ip address
            $ip = $request->ip(); //Dynamic IP address
            $details = GeoLocation::lookup($ip);
         
           
        } catch (Exception $e){
            $error = $e->getMessage();
            return view('weather-forecast', compact('error'));
        }
        try {
            $latitude = $details->getLatitude();
            $longitude = $details->getLongitude();
            $city_name = $details->getCity();
            // Weather info.
            $weather = new Weather();
            $info = $weather->get3HourlyByCord($latitude, $longitude);//we can get the current user's latitude and longitude and use to get live weather info. of the user's location.
            $city = $info->city;//array
            $list = $info->list;
            return view('weather-forecast', compact('city','list', 'city_name'));
        } catch(WeatherException $e){
            $error = $e->getMessage();
            return view('weather-forecast', compact('error'));
        }
        
    }


    // Geting current weather info of a specific city by the city name
    public function cityWeather(Request $request)
    {
        try{
            // validate input
            $request->validate([
                'city' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            ]);
            $city = $request->input('city');
            $weather = new Weather();
            $info = $weather->getCurrentByCity($city);
            $coord = $info->coord;
            $weather = $info->weather;
            $main = $info->main;
            $base = $info->base;
            $visibility = $info->visibility;
            $wind = $info->wind;
            $clouds = $info->clouds;
            $dt = $info->dt;
            $sys = $info->sys;
            $timezone = $info->timezone;
            $id = $info->id;
            $name = $info->name;
            $cod = $info->cod;
            $success = 'Current weather in '.$city.' retrieved successfully!!';
            return view('weather', compact('city','coord', 'weather', 'main', 'base','visibility','wind','clouds','dt','sys','timezone','id','name','cod','success'));
        }catch (WeatherException $e) {
            $error = $e->getMessage();
            // throw new HttpException(404, $e->getMessage());
            return view('weather', compact('error'));
        }        
       
    } 
    

    //Get a 4day 3 hour weather forcast for the specific city location
    public function cityWeatherForcast(Request $request)
    {
        try {
            $city = $request->input('city');
            $weather = new Weather();
            $info = $weather->get3HourlyByCity($city);
            $city = $info->city;//array
            $list = $info->list;
            return view('weather', compact('city','list'));
        } catch (WeatherException $e){
            $error = $e->getMessage();
            // throw new HttpException(404, $e->getMessage());
            return view('weather', compact('error'));
        }
      
    }


    // Optionally;
    // Get the current user's location air polution information
    public function currentAirPollution(Request $request)
    {
        try {
            // Getting user's latitude and longitude from ip address
            $ip = $request->ip(); //Dynamic IP address
            $details = GeoLocation::lookup($ip);

    
            $latitude = $details->getLatitude();
            $longitude = $details->getLongitude();
            $city_name = $details->getCity();
        } catch (Exception $e){
            $error = $e->getMessage();
            return view('air-polution', compact('error'));
        }
    
        try {
            // Weather info.
            $weather =  new Weather();
            $info = $weather->getAirPollutionByCord($latitude, $longitude);//we can get the current user's latitude and longitude and use to get live weather info. of the user's location.
            $coord = $info->coord;
            $list = $info->list;
            $dt = $list[0]->dt;
            $main = $list[0]->main;
            $components = $list[0]->components;
            return view('air-polution', compact('city_name','coord','list','dt','main','components'));
        } catch (WeatherException $e){
            $error = $e->getMessage();
            return view('air-polution', compact('error'));
        }
    }



    // PAGE VIEWS
    //Current weather page view
    public function currentWeatherView()
    {
      
        return view('current-weather');

    }

    //Weather forecast page view
    public function weatherForecastView()
    {
        return view('weather-forecast');
    }



    // Sounding page
    public function sounding()
    {
        return view('sounding');  
    }



    // Get sounding
    public function getSounding(Request $request)
    {
        $request->validate([
            'meteorologicalData' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'elevation' => 'required',
            'fullSounding' => 'required',
            'startDate' => 'required',
            'startHour' => 'required',
            'duration' => 'required',
            'includeDiagnostics' => 'required',
        ]);
        $input = $request->all();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'text/plain',
            'Ready-API-Key' => env('NOAA_API_KEY'),//API KEY HERE
        ])->post(env('NOAA_URL'), [
            'meteorologicalData' => $input['meteorologicalData'],
            'latitude' => $input['latitude'],
            'longitude' => $input['longitude'],
            'elevation' => $input['elevation'],
            'fullSounding' => $input['fullSounding'],
            'startDate' => $input['startDate'],
            'startHour' => $input['startHour'],
            'duration' => $input['duration'],
            'includeDiagnostics' => $input['includeDiagnostics'],
        ]);
        // Read response
        $data['status'] = $response->status();
        $data['ok'] = $response->ok();
        $data['successful'] = $response->successful();
        $data['failed'] = $response->failed();
        $data['body'] = $response->body();
        $data['object'] = $response->object();
        $data['json'] = $response->json();

        if ($response->ok()){
            $responseData = $response->body();
            $success = $input['meteorologicalData'].' Sounding data retrieved successfully';
            return view('sounding', Compact('responseData', 'success'));
        }
        if ($response->failed()){
            $responseData = $response->body();
            $error = $response->body();
            return view('sounding', Compact('responseData', 'error'));
        }


    }
}
