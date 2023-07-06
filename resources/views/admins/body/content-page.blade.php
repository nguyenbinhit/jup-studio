<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
@extends('admins.index')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">JupStudio</a></li>
                                <li class="breadcrumb-item active">Bảng điều khiển</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Xin chào {{ auth()->user()->name }} !</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#1abc9c"
                                data-bgcolor="#d1f2eb" value="{{ $contacts }}" data-skin="tron" data-angleoffset="0"
                                data-readonly="true" data-thickness=".15">
                        </div>
                        <div class="text-right">
                            <h3 class="mb-1"> {{ $contacts }} </h3>
                            <p class="text-muted mb-1">Tổng khách hàng liên hệ</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#3bafda"
                                data-bgcolor="#d8eff8" value="{{ $employees }}" data-skin="tron" data-angleoffset="0"
                                data-readonly="true" data-thickness=".15">
                        </div>
                        <div class="text-right">
                            <h3 class="mb-1"> {{ $employees }} </h3>
                            <p class="text-muted mb-1">Tổng thành viên</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#f672a7"
                                data-bgcolor="#fde3ed" value="{{ $accounts }}" data-skin="tron" data-angleoffset="0"
                                data-readonly="true" data-thickness=".15">
                        </div>
                        <div class="text-right">
                            <h3 class="mb-1"> {{ $accounts }} </h3>
                            <p class="text-muted mb-1">Tổng tài khoản</p>
                        </div>
                    </div>
                </div><!-- end col -->

                {{-- TODO --}}
                {{-- <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="70" data-height="70" data-fgcolor="#6c757d"
                                    data-bgcolor="#e2e3e5" value="35" data-skin="tron" data-angleoffset="0"
                                    data-readonly="true" data-thickness=".15">
                            </div>
                            <div class="text-right">
                                <h3 class="mb-1"> $78.58 </h3>
                                <p class="text-muted mb-1">Daily Average</p>
                            </div>
                        </div>
                    </div><!-- end col --> --}}

            </div>
            <!-- end row -->
        </div> <!-- container -->

    </div> <!-- content -->
@endsection
