<header>
    <div class="items">
        <div class="logos">
            <div class="edapp-logo">
                <a href=""><img src="{{ asset('assets/materials/e-ADAPP-logo-23.png')}}" alt=""></a>
                <a href=""class="sd-logo"><img src="{{ asset('assets/materials/3sdclTHE 2.png')}}" alt=""></a>
            </div>

        </div>
        <div class="icons">
            <div class="search-sec">
                <form action="search" method="post">
                    <input type="text" name="search-term" class="search-input" placeholder="Type to Search">
                </form>
            </div>
            <div class="lamp">
                <img src="{{ asset('assets/materials/lamp.png')}}" alt="">
                <span>Dark Mode</span>
            </div>
            <div class="chats">
                <img src="{{ asset('assets/materials/language.png')}}" alt="">
                <ul id="chatDrop" class="chat-dropContent">
                    <li>no chats</li>
                </ul>
            </div>
            <div class="profile-pic">
                    <img id="drop" class="dropbtn"  src="{{ asset('assets/materials/bored-6945309_1920.png')}}" alt="">
                <ul id="myDropdown" class="dropdown-content">
                    <li><a href=""><i class="fa-regular fa-user"></i> Profile</a></li>
                    <li><a href="{{ url('logout')}}"><i class="fa-light fa-arrow-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
            <div class="username">
                <p>{{ Str::of(auth()->user()->name)->limit(7) }}</p><p class="title">Farmer</p>
            </div>
        </div>

    </div>
</header>
<div class="nav">
<div class="menu-bar">
    <img id="pullSidebar" class="menu-btn" src="{{ asset('assets/materials/menu 1.png')}}" alt="">
</div>
<div class="menubar-icons">
    <div class="lamp">
        <a href=""><img src="{{ asset('assets/materials/lamp.png')}}" alt=""></a>
    </div>
    <div class="chats">
        <img src="{{ asset('assets/materials/language.png')}}" alt="">
        <ul id="chatDrop" class="chat-dropContent">
            <li>no chats</li>
        </ul>
    </div>
    <div class="profile-pic">
        <img id="drop" class="dropbtn"  src="{{ asset('assets/materials/bored-6945309_1920.png')}}" alt="">
        <ul id="myDropdown" class="dropdown-content">
            <li><a href=""><i class="fa-regular fa-user"></i> Profile</a></li>
            <li><a href="{{ url('logout')}}"><i class="fa-light fa-arrow-right-from-bracket"></i> Logout</a></li>
        </ul>
    </div>
    <div class="username">
        <p>{{ Str::of(auth()->user()->name)->limit(7) }}</p><p class="title">Farmer</p>
    </div>
</div>
</div>


