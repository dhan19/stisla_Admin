<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('userDetails*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('userDetails.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
</li>
<!-- 
<li class="side-menus {{ Request::is('trucks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('trucks.index') }}"><i class="fas fa-building"></i><span>Trucks</span></a>
</li>

<li class="side-menus {{ Request::is('drivers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('drivers.index') }}"><i class="fas fa-building"></i><span>Drivers</span></a>
</li> -->

