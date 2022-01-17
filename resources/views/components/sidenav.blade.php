<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li @yield('home')>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li @yield('active-class')>
                        <a href="{{ url('/login') }}">Login</a>
                    </li>
                    <li @yield('active-class')>
                        <a href="{{ url('/registration') }}">Registration</a>
                    </li>
                    <li>
                        <a href="index-projects.html">Projects</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Location</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li @yield('location')>
                        <a href="{{ url('/location') }}">Locations</a>
                    </li>
                    <li @yield('create-location')>
                        <a href="{{ url('/create-location') }}">Create Location</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
