<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="remixicon-dashboard-line"></i>
                        <span> Bảng thống kê </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.employees.index') }}" class="waves-effect">
                        <i class="remixicon-group-fill"></i>
                        <span> Thành viên studio </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.image.index') }}" class="waves-effect">
                        <i class="remixicon-image-2-line"></i>
                        <span> Quản lý hình ảnh </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.plans.index') }}" class="waves-effect">
                        <i class="remixicon-money-dollar-circle-line"></i>
                        <span> Quản lý bảng giá </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contacts.index') }}" class="waves-effect">
                        <i class="fe-users"></i>
                        <span> Thông tin khách hàng </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="remixicon-file-copy-2-line"></i>
                        <span> Thiết lập giao diện </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.pages.logo.show', ['page' => 'logo']) }}">Logo</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.home.show', ['page' => 'trang-chu']) }}">Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.about.show', ['page' => 'gioi-thieu']) }}">Trang giới
                                thiệu</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.service.show', ['page' => 'service']) }}">Trang dịch vụ</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.product.index') }}">Trang sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.review.index') }}">Trang khách hàng (Review)</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pages.social.show', ['page' => 'social']) }}">Quản lý mạng xã
                                hội</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.users.index') }}" class="waves-effect">
                        <i class="fe-user"></i>
                        <span> Quản lý tài khoản</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
