<!-- Topbar Start -->
<div class="navbar-custom" style="background-color: #3bafda">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('../bootstrap-admin/images/users/avatar-1.jpg') }}" alt="user-image"
                    class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-account-circle-line"></i>
                    <span>Tài khoản của tôi</span>
                </a>

                <!-- item-->
                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-settings-3-line"></i>
                    <span>Cài đặt</span>
                </a> --}}

                {{-- <div class="dropdown-divider"></div> --}}

                <!-- item-->


                <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                    <i class="remixicon-logout-box-line"></i>
                    <span>
                        Đăng xuất
                    </span>
                </a>
                <form method="POST" action="{{ route('admin.logout') }}" id="logout-form" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box" style="background-color: #3bafda">
        <a href="{{ route('admin.index') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('../bootstrapv1/img/logo.png') }}" alt="" height="70">
                <!-- <span class="logo-lg-text-light">Xeria</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="{{ asset('../bootstrapv1/img/logo.png') }}" alt="" height="60">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
    </ul>
</div>
<!-- end Topbar -->
