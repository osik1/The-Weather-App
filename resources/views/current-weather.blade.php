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
    <title>Current Weather</title>
</head>
<body>

    <!-- // header // -->
    @include('includes/header')
     <!-- // header // -->
 
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
            @if(isset($sys) && isset($name) && isset($dt))
                <h3>{{$sys->country}} - {{$name}}</h3>
                <p class="date">{{$dt}}</p>
            @endif
        </div>

        <div class="weather-data">
            <!-- //alert message  -->
            @if(isset($error))
                <div class="alert alert-error" role="alert">
                    {{ $error }}
                </div>
            @endif

            @if (isset($weather) && isset($main) && isset($visibility) && isset($sys))
                <!-- // Weather data // -->
                @include('includes/current-weather-data')
                <!-- // Weather data // -->
                <div id="map"></div>
            @endif
        </div>

        </div>

    </div>

   </div> 

    @if (isset($coord))
        <!-- Map -->
        <script>
            (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
                key: "YOUR_API_KEY_HERE",
                // Add other bootstrap parameters as needed, using camel case.
                // Use the 'v' parameter to indicate the version to load (alpha, beta, weekly, etc.)
            });
        </script>
        <!-- ADDING THE MAP AND THE MARKER -->
        <script>
            // Initialize and add the map
            let map;

            async function initMap() {
            // The location of Uluru
            const position = { lat: '{{ $coord->lat }}', lng: '{{ $coord->lon }}' };
            // Request needed libraries
            //@ts-ignore
            const { Map } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

            // The map, centered at Uluru
            map = new Map(document.getElementById("map"), {
                zoom: 4,
                center: position,
                mapId: "DEMO_MAP_ID",
            });

            // The marker, positioned at Uluru
            const marker = new AdvancedMarkerView({
                map: map,
                position: position,
                title: "{{$name}}",
            });
            }

            initMap();
        </script>
    @endif
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>