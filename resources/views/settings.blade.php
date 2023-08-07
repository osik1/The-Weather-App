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
    <title>Settings Panel</title>
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
                <img src="{{ asset('assets/materials/settings.png')}}" alt="">
            </div>
            <div class="heading">
                <p class="title">Settings Panel</p>
                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="form-wrapper">
        <h2>Account Settings</h2>
            @include('includes/settings-nav')
            <br>
            <div class="form-box"> 
                <div class="profile-edit">
                    <div class="profile-box"> 
                        <img src="{{ asset('assets/materials/bored-6945309_1920.png')}}" alt="">
                    </div>
                    <div class="profile-details">
                        <p><strong>Username:</strong> {{ auth()->user()->name}}</p>
                    </div>
                    <div class="profile-details">
                        <p><strong>First Name:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>Last Name:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>Email:</strong> {{ auth()->user()->email}}</p>
                    </div>
                </div>
                <div class="form-one">
                    <div class="profile-details">
                        <p><strong>Gender:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>Marital Status:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><Strong>Date Of Birth:</Strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><Strong>Birth Place:</Strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><Strong>Community:</Strong> </p>
                    </div>
                </div>
                <div class="form-two">
                    <div class="profile-details">
                        <p><strong>Phone:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><Strong>House Number:</Strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>Occupation:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>District:</strong> </p>
                    </div>
                    <div class="profile-details">
                        <p><strong>Region:</strong> </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

   </div> 
   <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>

</body>
</html>