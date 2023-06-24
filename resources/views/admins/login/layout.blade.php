<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jup Studio - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="JupStudio Dashboard" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('../bootstrap-admin/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('../bootstrap-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../bootstrap-admin/css/app.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="account-pages mt-5 mb-5 pt-5">
        @yield('content-login')
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('../bootstrap-admin/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('../bootstrap-admin/js/app.min.js') }}"></script>

</body>

</html>
