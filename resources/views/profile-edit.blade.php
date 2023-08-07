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
        <!-- // responsive notice // -->
   
    <title>Edit Profile</title>
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
            <h2>Personal Profile</h2>
             @include('includes/Settings-nav')
            <br>
              <!-- //alert message  -->
              @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif 
            <div class="form-box">
              
               <form action="{{ route('upload-profile') }}" method="post" enctype="multipart/form-data">
               @csrf
                     <!-- <form> -->
                    <div class="profile-edit">
                      <div id="preview-container" class="profile-box">
                        <!-- <img src="{{ asset('assets/materials/bored-6945309_1920.png')}}" alt=""> -->
                      </div>
                      <div class="uploads">
                        <div class="capture">
                            <a href="#" id="capture-popup-button"><img src="{{ asset('assets/materials/dslr-camera.png')}}" alt=""></a>
                            <p>Take a photo</p>
                        </div> 
                        <div class="upload">
                           <a href="#" id="upload-btn"><img src="{{ asset('assets/materials/cloud-computing.png')}}" alt="Upload profile picture"></a>
                            <p>upload photo</p>
                        </div>
                      </div>
                      <input type="hidden" id="image-data" name="avatar">
                      <div class="radio">
                        <label for="">Gender</label>
                        <div class="radios">
                            <input type="radio" name="gender" value="male"> <p>Male</p>
                           &nbsp;
                           &nbsp;
                            <input type="radio" name="gender" value="female"> <p>Female</p> 
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                    
                      </div>
                    </div>
                    <!-- </form> -->
                    <div class="form-one">
                        <div>
                            <label for="">First Name</label>
                            <input type="text" name="first_name"  value ="{{auth()->user()->first_name}}" class="text-input">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Username</label>
                            <input type="text" name="name"  value ="{{auth()->user()->name}}" class="text-input">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" name="email"  value ="{{auth()->user()->email}}" class="text-input">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Birth place</label>
                            <input type="text" name="birth_place"  value ="{{auth()->user()->birth_place}}" class="text-input">
                            @if ($errors->has('birth_place'))
                                <span class="text-danger">{{ $errors->first('birth_place') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">House Number</label>
                            <input type="text" name="house_number"  value ="{{auth()->user()->house_number}}" class="text-input">
                            @if ($errors->has('house_number'))
                                <span class="text-danger">{{ $errors->first('house_number') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Phone Number</label>
                            <input type="tel" name="phone"  value ="{{auth()->user()->phone}}" class="text-input">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Occupation</label>
                            <input type="text" name="occupation"  value ="{{auth()->user()->occupation}}" class="text-input">
                            @if ($errors->has('occupation'))
                                <span class="text-danger">{{ $errors->first('occupation') }}</span>
                            @endif
                        </div>
                       
                    </div>
                    <div class="form-two">
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name"  value ="{{auth()->user()->last_name}}" class="text-input">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth"  value ="{{auth()->user()->date_of_birth}}" class="text-input">
                            @if ($errors->has('date_of_birth'))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Community</label>
                            <input type="text" name="community"  value ="{{auth()->user()->community}}" class="text-input">
                            @if ($errors->has('community'))
                                <span class="text-danger">{{ $errors->first('community') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">District</label>
                            <input type="text" name="district"  value ="{{auth()->user()->district}}" class="text-input">
                            @if ($errors->has('district'))
                                <span class="text-danger">{{ $errors->first('district') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Region</label>
                            <input type="text" name="region"  value ="{{auth()->user()->region}}" class="text-input">
                            @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Marital Status</label>
                            <input type="text" name="status"  value ="{{auth()->user()->status}}" class="text-input">
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-three">
                        <div>
                            <label for="">Bio</label>
                            <textarea name="bio" id=""  rows="5" placeholder="Write a short introduction">{{auth()->user()->bio}}</textarea>
                            @if ($errors->has('bio'))
                                <span class="text-danger">{{ $errors->first('bio') }}</span>
                            @endif
                        </div>
                        <div class="buttons">
                            <button name="reset-btn" class="btn">Reset</button>
                            <button type="submit" name="save-btn" class="btn save-btn">Save</button>

                        </div>

                    </div>
               </form>
            </div>

        </div>

    </div>

   </div> 
   <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>

</body>
</html>