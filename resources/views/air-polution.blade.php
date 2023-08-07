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
    <title>Air Polution</title>
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
            @if (isset($dt) && isset($city_name))
                <h3>Date - {{ $dt }}</h3>
                <h4 class="air-header">Current air Polution in {{$city_name}}</h4>
            @endif 
            </div>

                <div class="air-data">
                      <!-- //alert message  -->
                    @if (isset($error))
                            <div class="alert alert-error" role="alert">
                                {{ $error }}
                            </div>
                    @endif
            @if (isset($coord) && isset($list) && isset($dt) && isset($main) && isset($components))
                <div class="data">
                <div class="data1">
                        <div class="air-quality">
                            <p class="qlty">Air Quality Index - {{ $main->aqi }}</p>
                        </div> 
                </div>
                    <br>
                    <div class="data2">
                        <div class="co">
                        <p><strong>CO</strong> - {{ $components->co }} μg/m3</p> 
                        </div>
                        <div class="no">
                        <p><strong>NO</strong> - {{ $components->no }} μg/m3</p>
                        </div>
                        <div class="no2">
                        <p><strong>NO2</strong> - {{ $components->no2 }} μg/m3</p>
                        </div>
                        <div class="o3">
                        <p><strong>O3</strong> - {{ $components->o3 }} μg/m3</p>
                        </div>
                        <div class="so2">
                        <p><strong>SO2</strong> - {{ $components->so2 }} μg/m3</p>
                        </div>
                        <div class="pm2">
                        <p><strong>PM2.5</strong> - {{ $components->pm2_5 }} μg/m3</p>
                        </div>
                        <div class="pm10">
                        <p><strong>PM10</strong> - {{ $components->pm10 }} μg/m3</p>
                        </div>
                        <div class="nh3">
                        <p><strong>NH3</strong>  - {{ $components->nh3 }} μg/m3</p>
                        </div>
                    </div>
                </div>
                <div class="explanation">
                    <div class="air">
                        <h3>Note</h3>
                        <p>Air Quality Index Possible values: 1, 2, 3, 4, 5. Where 1 = Good, 2 = Fair, 3 = Moderate, 4 = Poor, 5 = Very Poor</p>
                    </div>
                    <br>    
                    <div class="components-note">
                        <p><strong>CO</strong> = Concentration of <a href="https://en.wikipedia.org/wiki/Carbon_monoxide">Carbon Monooxide</a> in the air.</p>
                        <p><strong>NO</strong> = Concentration of <a href="https://en.wikipedia.org/wiki/Nitric_oxide">Nitrogen monoxide</a> in the air.</p>
                        <p><strong>NO2</strong>  = Concentration of <a href="https://en.wikipedia.org/wiki/Nitrogen_dioxide">Nitrogen dioxide</a> in the air.</p>
                        <p><strong>O3</strong> = Concentration of <a href="https://en.wikipedia.org/wiki/Ozone">Ozone</a> in the air.</p>
                        <p><strong>SO2</strong> = Concentration of <a href="https://en.wikipedia.org/wiki/Sulfur_dioxide">Sulphur dioxide</a> in the air.</p>
                        <p><strong>PM2.5</strong>  = Concentration of <a href="https://en.wikipedia.org/wiki/Particulates"> Fine particles matter</a> in the air.</p>
                        <p><strong>PM10</strong>  = Concentration of <a href="https://en.wikipedia.org/wiki/Particulates#Size,_shape_and_solubility_matter">Coarse particulate matter</a> in the air.</p>
                        <p><strong>NH3</strong>  = Concentration of <a href="https://en.wikipedia.org/wiki/Ammonia">Ammonia</a> in the air.</p>
                    </div>
                </div>
            @endif
                </div>
          

        </div>

    </div>

   </div> 
   
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>