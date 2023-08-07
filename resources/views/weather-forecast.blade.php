<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Weather Forecast</title>
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
                <p class="bio">Plant in a favorable season</p>
            </div>
        </div>
      
        <div class="form-wrapper">  
        @include('includes/weather-nav')
        <br>
        <div class="weather-header">
            @if(isset($city))
                <h3 class="date">{{ $city->country}} - {{$city->name}}</h3>
                <h4>3hr to 5 Days Forecast based on your last location</h4>
            @endif
        </div>
            <!-- //alert message  -->
            @if (isset($error))
                <div class="alert alert-error" role="alert">
                    {{ $error }}
                </div>  
            @endif

            @if (isset($list))
                <!-- // Weather forecast data // -->
                @include('includes/weather-forecast-data')
                <!-- // Weather forecast data // -->
            @endif
        </div>

    </div>

   </div> 
   
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>