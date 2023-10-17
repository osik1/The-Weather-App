<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Weather</title>
</head>
<body>

    <!-- // header // -->
    @include('includes/header')

 
   <div class="dashboard-wrapper">
    <!-- // Side bar // -->
    @include('includes/sidebar')

    <div class="dashboard-content">
        <div class="header-box">
            <div class="icon">
                <img src="{{ asset('assets/materials/rain.png' )}}" alt="">
            </div>
            <div class="heading">
                <p class="title">Weather Panel</p>
                <p class="bio">Weather data for you based on your location.</p>
            </div>
        </div>
      
        <div class="form-wrapper">  
        @include('includes/weather-nav')
        
        <br>
      
        <div class="weather-search">
            <div class="weather-search-header">
                <h3>Search Current weather by your City name</h3>
            </div>
            <form action="{{ url('weather/weather-in-city/{city}') }}" method="POST">
            @csrf
                <div>
                    <input type="text" name="city" value ="{{old('city')}}" class="text-input" placeholder="Enter city name">
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif    
                </div>
                <br>
                <div>
                    <button type="submit" name="register-btn" class="btn btn-big">Search</button>
                </div>
            </form>

            <!-- //alert message  -->
            @if (isset($success))
                <div class="alert alert-success" role="alert">
                    {{ $success }}
                </div>
            @endif
             <!-- //alert message  -->
             @if (isset($error))
                <div class="alert alert-error" role="alert">
                    {{ $error }}
                </div>
            @endif

            <div class="weather-data search">
                @if (isset($coord) && isset($weather) && isset($main) && isset($sys) && isset($name) && isset($dt) && isset($city))
                    @include('includes/current-weather-data')
                @endif
            </div>
        </div>

        </div>

    </div>

   </div> 
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>