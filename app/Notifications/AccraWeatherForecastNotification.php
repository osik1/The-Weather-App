<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Notification;

class AccraWeatherForecastNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $info;
    /**
     * Create a new notification instance.
     */
    public function __construct($info)
    {
        //
        $this->info = $info;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['vonage'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toVonage(object $notifiable): VonageMessage
    {
        $list = $this->info->list;
        $city = $this->info->city;
        return (new VonageMessage)
                    ->content(
                        'Please take note of the following forecast in your area',
                        'Date: '. Carbon::parse($list[2]->dt)->toDayDateTimeString(),
                        'Weather: '. $list[2]->weather[0]->main,
                        'Description: '. $list[2]->weather[0]->description,
                        'Temp: '. $list[2]->main->temp.'°C',
                        'Feels Like: '. $list[2]->main->feels_like.'°C',
                        'Visibility: '. $list[2]->visibility.'Km',
                        'Humidity: '. $list[2]->main->humidity.'%',
                        'Sunset: '. Carbon::parse($city->sunset),
                        'Sunrise: '. Carbon::parse($city->sunrise),
                    );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
