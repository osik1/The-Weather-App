 <!--//////////////////////////// First data Starts ////////////////////////////-->
 <div class="weather-forecast-data">
    <!-- //alert message  -->
    @if (session('error'))
    <div class="alert alert-error" role="alert">
        {{ session('error') }}
    </div>
    @endif

    <!-- DATA ARRAY  -->
    <div class="data">
    <div class="data1">
        <h3>{{Carbon\Carbon::parse($list[0]->dt)->toDayDateTimeString()}}</h3>
        <div class="weather-des">
            <img src="http://openweathermap.org/img/wn/{{ $list[0]->weather[0]->icon }}@2x.png" class="icon" alt="">
            <p class="main">{{ $list[0]->weather[0]->main }}</p>
            <p>{{ $list[0]->weather[0]->description }}</p>
        </div>
    </div>
    <div class="data2">
        <div class="temp">
            <p>{{ $list[0]->main->temp}}°C</p>
        </div>
        <div class="feels">
            <p>Feels like: {{ $list[0]->main->feels_like}}°C</p>
        </div>
        <div class="visibility">
            <p>visibility: {{ $list[0]->visibility}}Km</p>
        </div>
        <div class="humidity">
            <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[0]->main->humidity}}%</p>
        </div>
    </div>
    <div class="data3">
        <div class="sunset">
        <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
    </div>

    </div>
    <!-- DATA ARRAY  -->

    <!-- DATA ARRAY  -->
    <div class="data">
    <div class="data1">
        <h3>{{Carbon\Carbon::parse($list[1]->dt)->toDayDateTimeString()}}</h3>
        <div class="weather-des">
            <img src="http://openweathermap.org/img/wn/{{ $list[1]->weather[0]->icon }}@2x.png" class="icon" alt="">
            <p class="main">{{ $list[1]->weather[0]->main }}</p>
            <p>{{ $list[1]->weather[0]->description }}</p>
        </div>
    </div>
    <div class="data2">
        <div class="temp">
            <p>{{ $list[1]->main->temp}}°C</p>
        </div>
        <div class="feels">
            <p>Feels like: {{ $list[1]->main->feels_like}}°C</p>
        </div>
        <div class="visibility">
            <p>visibility: {{ $list[1]->visibility}}Km</p>
        </div>
        <div class="humidity">
            <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[1]->main->humidity}}%</p>
        </div>
    </div>
    <div class="data3">
        <div class="sunset">
        <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
    </div>

    </div>
<!-- DATA ARRAY  -->
<div class="data">
    <div class="data1">
        <h3>{{Carbon\Carbon::parse($list[2]->dt)->toDayDateTimeString()}}</h3>
        <div class="weather-des">
            <img src="http://openweathermap.org/img/wn/{{ $list[2]->weather[0]->icon }}@2x.png" class="icon" alt="">
            <p class="main">{{ $list[2]->weather[0]->main }}</p>
            <p>{{ $list[2]->weather[0]->description }}</p>
        </div>
    </div>
    <div class="data2">
        <div class="temp">
            <p>{{ $list[2]->main->temp}}°C</p>
        </div>
        <div class="feels">
            <p>Feels like: {{ $list[2]->main->feels_like}}°C</p>
        </div>
        <div class="visibility">
            <p>visibility: {{ $list[2]->visibility}}Km</p>
        </div>
        <div class="humidity">
            <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[2]->main->humidity}}%</p>
        </div>
    </div>
    <div class="data3">
        <div class="sunset">
        <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
    </div>

    </div>
<!-- DATA ARRAY  -->
</div>
<!--//////////////////////////// First data ends ////////////////////////////-->

<!--//////////////////////////// Second data Starts ////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[3]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[3]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[3]->weather[0]->main }}</p>
                <p>{{ $list[3]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[3]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[3]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[3]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[3]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[4]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[4]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[4]->weather[0]->main }}</p>
                <p>{{ $list[4]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[4]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[4]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[4]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[4]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[5]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[5]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[5]->weather[0]->main }}</p>
                <p>{{ $list[5]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[5]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[5]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[5]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[5]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--//////////////////////////// Second data ends ////////////////////////////-->

<!--//////////////////////////// Third data Starts ////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[6]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[6]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[6]->weather[0]->main }}</p>
                <p>{{ $list[6]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[6]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[6]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[6]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[6]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[7]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[7]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[7]->weather[0]->main }}</p>
                <p>{{ $list[7]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[7]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[7]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[7]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[7]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[8]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[8]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[8]->weather[0]->main }}</p>
                <p>{{ $list[8]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[8]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[8]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[8]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[8]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--//////////////////////////// Third data Ends ////////////////////////////-->

<!--//////////////////////////// Fouth data Starts ////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[9]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[9]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[9]->weather[0]->main }}</p>
                <p>{{ $list[9]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[9]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[9]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[9]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[9]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[10]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[10]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[10]->weather[0]->main }}</p>
                <p>{{ $list[10]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[10]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[10]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[10]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[10]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[11]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[11]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[11]->weather[0]->main }}</p>
                <p>{{ $list[11]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[11]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[11]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[11]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[11]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--//////////////////////////// Fouth data Ends ////////////////////////////-->

<!--/////////////////////////////// Fith data starts ///////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[12]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[12]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[12]->weather[0]->main }}</p>
                <p>{{ $list[12]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[12]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[12]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[12]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[12]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[13]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[13]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[13]->weather[0]->main }}</p>
                <p>{{ $list[13]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[13]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[13]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[13]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[13]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[14]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[14]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[14]->weather[0]->main }}</p>
                <p>{{ $list[14]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[14]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[14]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[14]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[14]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
    <!--/////////////////////////////////// Fith data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 6 data ends /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[15]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[15]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[15]->weather[0]->main }}</p>
                <p>{{ $list[15]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[15]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[15]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[15]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[15]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[16]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[16]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[16]->weather[0]->main }}</p>
                <p>{{ $list[16]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[16]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[16]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[16]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[16]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[17]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[17]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[17]->weather[0]->main }}</p>
                <p>{{ $list[17]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[17]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[17]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[17]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[17]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 6 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 7 data ends /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[18]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[18]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[18]->weather[0]->main }}</p>
                <p>{{ $list[18]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[18]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[18]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[18]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[18]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[19]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[19]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[19]->weather[0]->main }}</p>
                <p>{{ $list[19]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[19]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[19]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[19]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[19]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[20]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[20]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[20]->weather[0]->main }}</p>
                <p>{{ $list[20]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[20]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[20]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[20]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[20]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 7 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 8 data ends /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[21]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[21]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[21]->weather[0]->main }}</p>
                <p>{{ $list[21]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[21]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[21]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[21]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[21]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[22]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[22]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[22]->weather[0]->main }}</p>
                <p>{{ $list[22]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[22]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[22]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[22]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[22]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[23]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[23]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[23]->weather[0]->main }}</p>
                <p>{{ $list[23]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[23]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[23]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[23]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[23]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 8 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 9 data ends /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[24]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[24]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[24]->weather[0]->main }}</p>
                <p>{{ $list[24]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[24]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[24]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[24]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[24]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[25]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[25]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[25]->weather[0]->main }}</p>
                <p>{{ $list[25]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[25]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[25]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[25]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[25]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[26]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[26]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[26]->weather[0]->main }}</p>
                <p>{{ $list[26]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[26]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[26]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[26]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[26]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 9 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 10 data ends /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[27]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[27]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[27]->weather[0]->main }}</p>
                <p>{{ $list[27]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[27]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[27]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[27]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[27]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[28]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[28]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[28]->weather[0]->main }}</p>
                <p>{{ $list[28]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[28]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[28]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[28]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[28]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[29]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[29]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[29]->weather[0]->main }}</p>
                <p>{{ $list[29]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[29]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[29]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[29]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[29]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 10 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 11 data Start /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[30]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[30]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[30]->weather[0]->main }}</p>
                <p>{{ $list[30]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[30]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[30]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[30]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[30]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[31]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[31]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[31]->weather[0]->main }}</p>
                <p>{{ $list[31]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[31]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[31]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[31]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[31]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[32]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[32]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[32]->weather[0]->main }}</p>
                <p>{{ $list[32]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[32]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[32]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[32]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[32]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 11 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 12 data Start /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[33]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[33]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[33]->weather[0]->main }}</p>
                <p>{{ $list[33]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[33]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[33]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[33]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[33]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[34]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[34]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[34]->weather[0]->main }}</p>
                <p>{{ $list[34]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[34]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[34]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[34]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[34]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[35]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[35]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[35]->weather[0]->main }}</p>
                <p>{{ $list[35]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[35]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[35]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[35]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[35]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    </div>
<!--/////////////////////////////////// 12 data ends /////////////////////////////////////-->

<!--/////////////////////////////////// 13 data Start /////////////////////////////////////-->
<div class="weather-forecast-data">
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[36]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[36]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[36]->weather[0]->main }}</p>
                <p>{{ $list[36]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[36]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[36]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[36]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[36]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[37]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[37]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[37]->weather[0]->main }}</p>
                <p>{{ $list[37]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[37]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[37]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[37]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[37]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
    <!-- DATA ARRAY  -->
    <!-- DATA ARRAY  -->
    <div class="data">
        <div class="data1">
            <h3>{{Carbon\Carbon::parse($list[38]->dt)->toDayDateTimeString()}}</h3>
            <div class="weather-des">
                <img src="http://openweathermap.org/img/wn/{{ $list[38]->weather[0]->icon }}@2x.png" class="icon" alt="">
                <p class="main">{{ $list[38]->weather[0]->main }}</p>
                <p>{{ $list[38]->weather[0]->description }}</p>
            </div>
        </div>
        <div class="data2">
            <div class="temp">
                <p>{{ $list[38]->main->temp}}°C</p>
            </div>
            <div class="feels">
                <p>Feels like: {{ $list[38]->main->feels_like}}°C</p>
            </div>
            <div class="visibility">
                <p>visibility: {{ $list[38]->visibility}}Km</p>
            </div>
            <div class="humidity">
                <p><img src="{{ asset('assets/materials/humidity.png' )}}" alt="">Humidity: {{ $list[38]->main->humidity}}%</p>
            </div>
        </div>
        <div class="data3">
        <div class="sunset">
            <p><img src="{{ asset('assets/materials/sunset.png' )}}" alt="">Sunset: {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
        </div>
        <div class="sunrise">
        <p><img src="{{ asset('assets/materials/sunrise.png' )}}" alt="">Sunrise: {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
        </div>
        </div>

    </div>
</div>
<!--/////////////////////////////////// 13 data ends /////////////////////////////////////-->
