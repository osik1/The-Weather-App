<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WeatherForecast extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    public $info;
    /**
     * Create a new message instance.
     */
    public function __construct($info)
    {
        $this->info = $info;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Weather Forecast',
        
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        //Embedding images to email template 
        $logo = file_get_contents(public_path('assets/materials/e-ADAPP-logo-23.png'));
        $logourl = 'data:image/png;base64,' . base64_encode($logo);
        $weather = 'https://openweathermap.org/img/wn/';
        $humidity = file_get_contents(public_path('/assets/materials/humidity.png'));
        $humidityurl = 'data:image/png;base64,' . base64_encode($humidity);
        $sunset = file_get_contents(public_path('/assets/materials/sunset.png'));
        $sunseturl = 'data:image/png;base64,' . base64_encode($sunset);
        $sunrise = file_get_contents(public_path('/assets/materials/sunrise.png'));
        $sunriseurl = 'data:image/png;base64,' . base64_encode($sunrise);
       
        return new Content(
            view: 'emails/accra-weather-forecast',
            with: [
                'list' => $this->info->list,
                'city' => $this->info->city,
                'logo' => $logourl,
                'weather' => $weather,
                'humidity' => $humidityurl,
                'sunset' => $sunseturl,
                'sunrise' => $sunriseurl,
            ]
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
