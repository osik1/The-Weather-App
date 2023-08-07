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
    <title>Synchronization Panel</title>
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
                <img src="{{ asset('assets/materials/sync.png')}}" alt="">
            </div>
            <div class="heading">
                <p class="title">Synchronization Panel</p>
                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="form-wrapper">
           
            <br>
            <div class="form-box">
            
            </div>

        </div>

    </div>

   </div> 
   <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>

</body>
</html>