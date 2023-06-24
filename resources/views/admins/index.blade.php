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

    <!-- App css -->
    <link href="{{ asset('../bootstrap-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/app.min.cs') }}s" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        @include('admins.body.topbar')

        @include('admins.body.left-sidebar')

        @yield('content')

        @include('admins.body.right-sidebar')
    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('../bootstrap-admin/js/vendor.min.js') }}"></script>

    <script src="{{ asset('../bootstrap-admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('../bootstrap-admin/libs/peity/jquery.peity.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('../bootstrap-admin/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('../bootstrap-admin/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('../bootstrap-admin/js/app.min.js') }}"></script>

</body>

</html>
