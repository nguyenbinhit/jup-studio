<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Minton - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('../bootstrap-admin/images/favicon.ico') }}">

    <!-- Summernote css -->
    <link href="{{ asset('../bootstrap-admin/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('../bootstrap-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom box css -->
    <link href="{{ asset('../bootstrap-admin/libs/custombox/custombox.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('../bootstrap-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/app.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        @include('admins.body.topbar')

        @include('admins.body.left-sidebar')

        <div class="content-page">
            @yield('content')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        2023 &copy; <a href="">Dashboard JUP Studio</a>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    {{-- modal --}}
    <script src="{{ asset('../bootstrap-admin/libs/custombox/custombox.min.js') }}"></script>

    <!-- Vendor js -->
    <script src="{{ asset('../bootstrap-admin/js/vendor.min.js') }}"></script>

    <script src="{{ asset('../bootstrap-admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('../bootstrap-admin/libs/peity/jquery.peity.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('../bootstrap-admin/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('../bootstrap-admin/js/pages/dashboard-1.init.js') }}"></script>

    <!-- Summernote js -->
    <script src="{{ asset('../bootstrap-admin/libs/summernote/summernote-bs4.min.js') }}"></script>

    <!-- Init js -->
    <script src="{{ asset('../bootstrap-admin/js/pages/form-summernote.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('../bootstrap-admin/js/app.min.js') }}"></script>

    @stack('script')
</body>

</html>
