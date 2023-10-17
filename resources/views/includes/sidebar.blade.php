<div id="sidebar" class="left-sidebar">
        <div class="sidebar-logo">
        </div>
        <p>MAIN NAVIGATION</p>
        <ul>
           <li><a href="{{ url('/')}}" class="nav-item nav-dashboard {{ (Request::is('/') || Request::is('/*')) ? 'active' : '' }}">Dashboard</a></li>
           <li><a href="{{ url('weather')}}" class="nav-item {{ (Request::is('weather') || Request::is('weather/*')) ? 'active' : '' }}">Weather</a></li> 
           <li><a href="{{ url('sounding')}}" class="nav-item {{ (Request::is('sounding') || Request::is('sounding/*')) ? 'active' : '' }}">Sounding</a></li> 
        </ul>  
</div>