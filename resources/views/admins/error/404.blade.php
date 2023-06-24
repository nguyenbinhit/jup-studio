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
    <div class="content mt-5 mb-5 pt-5">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="error-text-box">
                        <svg viewbox="0 0 600 200">
                            <!-- Symbol-->
                            <symbol id="s-text">
                                <text text-anchor="middle" x="50%" y="50%" dy=".35em">404!</text>
                            </symbol>
                            <!-- Duplicate symbols-->
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                            <use class="text" xlink:href="#s-text"></use>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h3 class="mt-0 mb-2">Rất tiếc! Không tìm thấy trang </h3>
                        <p class="text-muted mb-3">Có vẻ như bạn đã rẽ nhầm. Đừng lo lắng... điều đó xảy ra với
                            những người giỏi nhất trong chúng ta. Bạn có thể muốn kiểm tra kết nối internet của bạn.
                            Đây là một mẹo nhỏ có thể giúp bạn trở lại đúng hướng.</p>

                        <a href="{{ route('admin.index') }}" class="btn btn-success waves-effect waves-light">Quay
                            lại trang admin</a>
                    </div>
                    <!-- end row -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('../bootstrap-admin/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('../bootstrap-admin/js/app.min.js') }}"></script>

</body>

</html>
