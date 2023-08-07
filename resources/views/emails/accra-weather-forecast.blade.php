<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Weather Forecast Email Template</title>
	<style>
		body {
			background-color: #ffffff;
			font-family: 'Poppins';
			font-size: 14px;
			line-height: 1.5;
			color: #333;
			margin: 0;
			padding: 0;
		}
		
		table {
			width: 100%;
			border-collapse: collapse;
		}
		
		td {
			padding: 10px;
			border: 1px solid #ccc;
			border-bottom: 2px solid #ccc;

		}
		td .logo {
			width: 200px;
			text-align: center;
		}
		td .icon{
			width: 100px;
		}
        td img{
            width: 20px;
        }
		td .main{
			font-size: 20px;
			font-weight: 600;
		}
		
		h1 {
			font-size: 24px;
			font-weight: bold;
			margin: 0;
			padding: 0;
		}
		
		p {
			margin: 0;
			padding: 0;
		}
		
		@media only screen and (max-width: 600px) {
			table {
				width: 100% !important;
			}
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>
				<img class="logo" src="{{ $logo }}" alt="Logo">
				<h1>Your Weather Forecast</h1>
				<br>
                <p>Hello,</p>
                <p>Please take note of the following weather forecast in your area</p>
			</td>
		</tr>
		@if (isset($list) && isset($city)) 
		<tr>
			
			<td>
                <h3>{{Carbon\Carbon::parse($list[2]->dt)->toDayDateTimeString()}}</h3>
                <img src="{{$weather}}{{ $list[2]->weather[0]->icon }}@2x.png" class="icon" alt="Weather icon">
                <p class="main">{{ $list[2]->weather[0]->main }}</p>
                <p>{{ $list[2]->weather[0]->description }}</p>
                <p><strong>Temperature:</strong> {{ $list[2]->main->temp}}°C</p>
                <p><strong>Feels like:</strong> {{ $list[2]->main->feels_like}}°C</p>
                <p><strong>visibility:</strong> {{ $list[2]->visibility}}Km</p>
                <p><img src="{{ $humidity }}" alt="humidity"><strong>Humidity:</strong> {{ $list[2]->main->humidity}}%</p>
                <p><img src="{{ $sunset }}" alt="sunset"><strong>Sunset:</strong> {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
                <p><img src="{{ $sunrise }}" alt="sunrise"><strong>Sunrise:</strong> {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
			</td>
		</tr>
		<tr>
			<td>
                <h3>{{Carbon\Carbon::parse($list[10]->dt)->toDayDateTimeString()}}</h3>
                <img src="{{$weather}}{{ $list[10]->weather[0]->icon }}@2x.png" class="icon" alt="Weather icon">
                <p class="main">{{ $list[10]->weather[0]->main }}</p>
                <p>{{ $list[10]->weather[0]->description }}</p>
                <p><strong>Temperature:</strong> {{ $list[10]->main->temp}}°C</p>
                <p><strong>Feels like:</strong> {{ $list[10]->main->feels_like}}°C</p>
                <p><strong>visibility:</strong> {{ $list[10]->visibility}}Km</p>
                <p><img src="{{ $humidity }}" alt="humidity"><strong>Humidity:</strong> {{ $list[10]->main->humidity}}%</p>
                <p><img src="{{ $sunset }}" alt="sunset"><strong>Sunset:</strong> {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
                <p><img src="{{ $sunrise }}" alt="sunrise"><strong>Sunrise:</strong> {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
			</td>
		</tr>

		<tr>
			<td>
                <h3>{{Carbon\Carbon::parse($list[18]->dt)->toDayDateTimeString()}}</h3>
                <img src="{{$weather}}{{ $list[18]->weather[0]->icon }}@2x.png" class="icon" alt="Weather icon">
                <p class="main">{{ $list[18]->weather[0]->main }}</p>
                <p>{{ $list[18]->weather[0]->description }}</p>
                <p><strong>Temperature:</strong> {{ $list[18]->main->temp}}°C</p>
                <p><strong>Feels like:</strong> {{ $list[18]->main->feels_like}}°C</p>
                <p><strong>visibility:</strong> {{ $list[18]->visibility}}Km</p>
                <p><img src="{{ $humidity }}" alt="humidity"><strong>Humidity:</strong> {{ $list[18]->main->humidity}}%</p>
                <p><img src="{{ $sunset }}" alt="sunset"><strong>Sunset:</strong> {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
                <p><img src="{{ $sunrise }}" alt="sunrise"><strong>Sunrise:</strong> {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
			</td>
		</tr>
		<tr>
			<td>
                <h3>{{Carbon\Carbon::parse($list[26]->dt)->toDayDateTimeString()}}</h3>
                <img src="{{$weather}}{{ $list[26]->weather[0]->icon }}@2x.png" class="icon" alt="Weather icon">
                <p class="main">{{ $list[26]->weather[0]->main }}</p>
                <p>{{ $list[26]->weather[0]->description }}</p>
                <p><strong>Temperature:</strong> {{ $list[26]->main->temp}}°C</p>
                <p><strong>Feels like:</strong> {{ $list[26]->main->feels_like}}°C</p>
                <p><strong>visibility:</strong> {{ $list[26]->visibility}}Km</p>
                <p><img src="{{ $humidity }}" alt="humidity"><strong>Humidity:</strong> {{ $list[26]->main->humidity}}%</p>
                <p><img src="{{ $sunset }}" alt="sunset"><strong>Sunset:</strong> {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
                <p><img src="{{ $sunrise }}" alt="sunrise"><strong>Sunrise:</strong> {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
			</td>
		</tr>
		<tr>
			<td>
                <h3>{{Carbon\Carbon::parse($list[34]->dt)->toDayDateTimeString()}}</h3>
                <img src="{{$weather}}{{ $list[34]->weather[0]->icon }}@2x.png" class="icon" alt="Weather icon">
                <p class="main">{{ $list[34]->weather[0]->main }}</p>
                <p>{{ $list[34]->weather[0]->description }}</p>
                <p><strong>Temperature:</strong> {{ $list[34]->main->temp}}°C</p>
                <p><strong>Feels like:</strong> {{ $list[34]->main->feels_like}}°C</p>
                <p><strong>visibility:</strong> {{ $list[34]->visibility}}Km</p>
                <p><img src="{{ $humidity }}" alt="humidity"><strong>Humidity:</strong> {{ $list[34]->main->humidity}}%</p>
                <p><img src="{{ $sunset }}" alt="sunset"><strong>Sunset:</strong> {{Carbon\Carbon::parse($city->sunset)->format('h:i a')}}</p>
                <p><img src="{{ $sunrise }}" alt="sunrise"><strong>Sunrise:</strong> {{Carbon\Carbon::parse($city->sunrise)->format('h:i a')}}</p>
			</td>
		</tr>
			
		
        <tr>
		@endif
		</tr>
	</table>
</body>
</html>
