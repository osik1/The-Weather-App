<div class="data"> 
    <div class="data1">
        @if (isset($city))
        <h3>Current Highlights in {{$city}}</h3>
        @else
        <h3>Current Highlights</h3>
        @endif
        <div class="weather-des">
            <img src="http://openweathermap.org/img/wn/{{ $weather[0]->icon }}@2x.png" class="icon" alt="">
            <p class="main">{{ $weather[0]->main }}</p>
            <p>{{ $weather[0]->description }}</p>
        </div>
    </div>
    <div class="data2">
        <div class="temp">
            <p>{{ $main->temp}}°C</p>
        </div>
        <div class="feels">
            <p>Feels like: {{ $main->feels_like}}°C</p>
        </div>
        <div class="visibility">
            <p>visibility: {{ $visibility}}Km</p>
        </div>
        <div class="humidity">
            <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{$main->humidity}}%</p>
        </div>
    </div>
    <div class="data3">
        <div class="sunset">
        <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($sys->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($sys->sunrise)->format('h:i a')}}</p>
        </div>
    </div>
</div>