<?php

namespace App\Console\Commands;

use App\Mail\WeatherForecast;
use App\Models\User;
use App\Notifications\AccraWeatherForecastNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use RakibDevs\Weather\Exceptions\WeatherException;
use RakibDevs\Weather\Weather;

class SendWeatherForecastToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-weather-forecast-to-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Weather Forecast to all users of e-ADAPP';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //Get the weather forecast of a particular location
        try {
            // Weather info.
            $weather = new Weather();
            $info = $weather->get3HourlyByCity('accra');//we can get the current user's latitude and longitude and use to get live weather info. of the user's location.
        } catch(WeatherException $e){
            $this->info($e->getMessage());
        }

        // Get all users and send them the forecast individually
        $users = User::all();
        foreach ($users as $user) {
            // Mail::to($user)->send(new WeatherForecast($info));//mail 
            $user->notify(new AccraWeatherForecastNotification($info));//SMS  
        }

        $this->info('Weather Forecast sent successfully');
    }
}
