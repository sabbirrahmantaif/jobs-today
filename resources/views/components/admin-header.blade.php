<div class="header">
    <div class="logo logo-dark">
        <a href="index.html">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
            <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold.png') }}" alt="Logo">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="index.html">
            <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Logo">
            <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold-white.png') }}" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                    <div class="avatar avatar-icon avatar-lg">
                        <i class="anticon anticon-user"></i>
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-50">
                            <div class="avatar avatar-icon avatar-lg">
                                <i class="anticon anticon-user"></i>
                            </div>
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">Admin Pannel</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ url('admin/logout') }}" method="post" name="logout">
                        @csrf
                        <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10" onclick="document.logout.submit();">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                    <span class="m-l-10">Logout</span>
                                </div>
                                <i class="anticon font-size-10 anticon-right"></i>
                            </div>
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
