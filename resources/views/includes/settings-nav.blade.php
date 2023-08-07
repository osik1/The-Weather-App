<ul class="navigation">
    <li><a href="{{ url('settings/profile') }}" class="nav-item {{ (Request::is('settings/profile') || Request::is('settings/profile/*')) ? 'active' : '' }}">Profile</a></li>
    <li ><a href="{{ url('settings/profile-edit') }}" class="nav-item {{ (Request::is('settings/profile-edit') || Request::is('settings/profile-edit/*')) ? 'active' : '' }}">Edit Profile</a></li>
    <li><a href="">Security</a></li>
</ul>