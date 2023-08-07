<ul class="navigation">
    <li><a href="{{ url('weather')}}" class="nav-item {{ (Request::is('weather')) ? 'active' : '' }}"><img src="{{ asset('assets/materials/home.png' )}}" alt=""></a></li>
    <li ><a href="{{ url('weather/current-weather') }}" class="nav-item {{ (Request::is('weather/current-weather') || Request::is('weather/current-weather/*')) ? 'active' : '' }}">Current Weather</a></li>
    <li><a href="{{ url('weather/weather-forecast') }}" class="nav-item {{ (Request::is('weather/weather-forecast') || Request::is('weather/weather-forecast/*')) ? 'active' : '' }}">Weather forecast</a></li>
    <li><a href="{{ url('weather/air-polution') }}" class="nav-item {{ (Request::is('weather/air-polution') || Request::is('weather/air-polution/*')) ? 'active' : '' }}">Air Polution</a></li>
</ul>