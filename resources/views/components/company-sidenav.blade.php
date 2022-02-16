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
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-folder"></i>
                    </span>
                    <span class="title">Jobs</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li @yield('job.index')>
                        <a href="{{url('/job')}}">Manage</a>
                    </li>
                    <li @yield('job.create')>
                        <a href="{{url('/job/create')}}">Create</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-mail"></i>
                    </span>
                    <span class="title">Applications</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li @yield('application.index')>
                        <a href="{{url('/applications')}}">Details</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
