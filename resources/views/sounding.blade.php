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
    <title>Sounding</title>
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
                <p class="title">Sounding Panel</p>
                <p class="bio">Sounding data for experts</p>
            </div>
        </div>
      
        <div class="form-wrapper">  
        
        <br>
      
        <div class="weather-search">
            <div class="weather-search-header">
                <h3>Fill the form to receive a sounding data</h3>
            </div>
            <form action="{{ route('send.sounding') }}" method="POST">
            @csrf
                <div>
                    <input type="text" name="meteorologicalData" value ="{{old('meteorologicalData')}}" class="text-input" placeholder="Enter meteorological data">
                    @if ($errors->has('meteorologicalData'))
                    <span class="text-danger">{{ $errors->first('meteorologicalData') }}</span>
                    @endif 
                    <p>must be: GFS, GFS0p25, HRRR, NAM12, NAMHUS, NAMHAK, NAMHHI, NAMCNEST</p>   
                </div>
                <br>
                <div>
                    <input type="text" name="latitude" value ="{{old('latitude')}}" class="text-input" placeholder="Enter latitude">
                    @if ($errors->has('latitude'))
                    <span class="text-danger">{{ $errors->first('latitude') }}</span>
                    @endif
                    <p>Latitude must be between -90 and 90 degrees</p>    
                </div>
                <br>
                <div>
                    <input type="text" name="longitude" value ="{{old('longitude')}}" class="text-input" placeholder="Enter longitude">
                    @if ($errors->has('longitude'))
                    <span class="text-danger">{{ $errors->first('longitude') }}</span>
                    @endif 
                    <p>longitude must be between -180 and 180 degrees</p>   
                </div>
                <br>
                <div>
                    <input type="text" name="elevation" value ="{{old('elevation')}}" class="text-input" placeholder="Enter elevation">
                    @if ($errors->has('elevation'))
                    <span class="text-danger">{{ $errors->first('elevation') }}</span>
                    @endif
                    <p>Elevaton of profile location is known for lable. Use 0 if unknown.</p>    
                </div>
                <br>
                <div>
                    <input type="text" name="fullSounding" value ="{{old('fullSounding')}}" class="text-input" placeholder="Enter fullSounding">
                    @if ($errors->has('fullSounding'))
                    <span class="text-danger">{{ $errors->first('fullSounding') }}</span>
                    @endif 
                    <p>Use true for full sounding, false for up to 400 hPa.</p>   
                </div>
                <br>
                <div>
                    <input type="text" name="startDate" value ="{{old('startDate')}}" class="text-input" placeholder="Enter start Date">
                    @if ($errors->has('startDate'))
                    <span class="text-danger">{{ $errors->first('startDate') }}</span>
                    @endif 
                    <p>Start date must be YYYY-MM-DD format</p>   
                </div>
                <br>
                <div>
                    <input type="text" name="startHour" value ="{{old('startHour')}}" class="text-input" placeholder="Enter start hour">
                    @if ($errors->has('startHour'))
                    <span class="text-danger">{{ $errors->first('startHour') }}</span>
                    @endif 
                    <p>Start hour must be between 0 and 23</p>   
                </div>
                <br>
                <div>
                    <input type="text" name="duration" value ="{{old('duration')}}" class="text-input" placeholder="Enter duration">
                    @if ($errors->has('duration'))
                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                    @endif 
                    <p>Duration is the number of hours. Use 0 for default value </p>   
                </div>
                <br>
                <div>
                    <input type="text" name="includeDiagnostics" value ="{{old('includeDiagnostics')}}" class="text-input" placeholder="Enter include Diagnostics here">
                    @if ($errors->has('includeDiagnostics'))
                    <span class="text-danger">{{ $errors->first('includeDiagnostics') }}</span>
                    @endif
                    <p>It can be true or false</p>    
                </div>
                <br>
                <div>
                    <button type="submit" name="register-btn" class="btn btn-big">Send</button>
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
              @if (isset($responseData))
               <P>{{ $responseData }}</P>
                @endif

            </div>
        </div>

        </div>

    </div>

   </div> 
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>