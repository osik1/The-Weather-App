<div id="sidebar" class="left-sidebar">
        <div class="sidebar-logo">
        <a href=""class="sd-logo"><img src="{{ asset('assets/materials/3sdclTHE 2.png')}}" alt=""></a>
        </div>
        <p>MAIN NAVIGATION</p>
        <ul>
           <li><a href="{{ url('dashboard')}}" class="nav-item nav-dashboard {{ (Request::is('dashboard') || Request::is('dashboard/*')) ? 'active' : '' }}">Dashboard</a></li>
           <li><a href="{{ url('weather')}}" class="nav-item {{ (Request::is('weather') || Request::is('weather/*')) ? 'active' : '' }}">Weather</a></li> 
           <li><a href="{{ url('sounding')}}" class="nav-item {{ (Request::is('sounding') || Request::is('sounding/*')) ? 'active' : '' }}">Sounding</a></li> 
           <!-- <li><a href="{{ url('farmers')}}" class="nav-item {{ (Request::is('farmers') || Request::is('farmers/*')) ? 'active' : '' }}">Farmers</a></li>
           <li><a href="{{ url('staff')}}" class="nav-item {{ (Request::is('staff') || Request::is('staff/*')) ? 'active' : '' }}">Staff</a></li>
           <li><a href="{{ url('synchronization')}}" class="nav-item {{ (Request::is('synchronization') || Request::is('synchronization/*')) ? 'active' : '' }}">Synchronization</a></li>
           <li><a href="{{ url('report')}}" class="nav-item {{ (Request::is('report') || Request::is('report/*')) ? 'active' : '' }}">Report</a></li>
           <li><a href="{{ url('settings')}}" class="nav-item {{ (Request::is('settings') || Request::is('settings/*')) ? 'active' : '' }}">Settings</a></li> -->
        </ul>  
</div>