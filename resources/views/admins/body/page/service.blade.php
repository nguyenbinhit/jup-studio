@extends('admins.index')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ env('WEBSITE_NAME') }}</a>
                                </li>
                                <li class="breadcrumb-item active">Trang dịch vụ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thông tin trang dịch vụ</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <style type="text/css">
                        .about-box {
                            transition: .5s linear;
                            text-align: center;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                            padding: 40px;
                            max-width: 350px;
                        }

                        .color-white {
                            color: #ffffff;
                        }

                        .font-weight-500 {
                            font-weight: 500;
                        }

                        .mt-25px {
                            margin-top: 25px;
                        }

                        .mb-15px {
                            margin-bottom: 15px;
                        }

                        .text-capitalize {
                            text-transform: capitalize !important;
                        }

                        .about-box>h5 {
                            font-family: 'Montserrat', sans-serif;
                            font-size: 1.25rem;
                            line-height: 1;
                        }

                        h5,
                        p,
                        span {
                            overflow-wrap: break-word;
                        }

                        .d-inline-block {
                            display: inline-block !important;
                        }

                        span {
                            transition: all .3s ease;
                        }

                        *,
                        ::after,
                        ::before {
                            box-sizing: border-box;
                        }

                        .mx-auto {
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }

                        .about-box i {
                            font-size: 30px;
                            position: relative;
                        }

                        .fa,
                        .fas {
                            font-weight: 900;
                        }

                        .fa,
                        .far,
                        .fas {
                            font-family: "Font Awesome 5 Free";
                        }

                        .fa,
                        .fab,
                        .fal,
                        .far,
                        .fas {
                            -moz-osx-font-smoothing: grayscale;
                            -webkit-font-smoothing: antialiased;
                            display: inline-block;
                            font-style: normal;
                            font-variant: normal;
                            text-rendering: auto;
                            line-height: 1;
                        }

                        .font-weight-light {
                            font-weight: 300 !important;
                        }
                    </style>
                    <div class="card-box text-center row">
                        <div class="col-12 mb-4">
                            <div class="about-box mb-5 mb-lg-0 mx-auto" style="background-color: #84a1d2">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-pencil-alt"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">
                                    {{ $services['metadata']['design']['title'] }}</h5>
                                <p class="font-weight-light color-white">
                                    {{ $services['metadata']['design']['content'] }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="about-box mb-5 mb-lg-0 mx-auto" style="background-color: #f1c30f">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-cog"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px">
                                    {{ $services['metadata']['facebook']['title'] }}</h5>
                                <p class="font-weight-light color-white">
                                    {{ $services['metadata']['facebook']['content'] }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="about-box mb-0 mx-auto" style="background-color: #e57bff">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-code"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">
                                    {{ $services['metadata']['coder']['title'] }}</h5>
                                <p class="font-weight-light color-white">{{ $services['metadata']['coder']['content'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <ul class="nav nav-pills navtab-bg">
                            <li class="nav-item">
                                <a href="#" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <i class="mdi mdi-settings-outline mr-1"></i>Cập nhật
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="settings">
                                <form method="POST"
                                    action="{{ route('admin.pages.service.update', ['page' => 'service']) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fa fa-pencil-alt mr-1"></i>
                                        Thông tin dịch vụ thiết kế đồ họa</h5>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Tiêu đề dịch vụ</label>
                                        <input type="text" class="form-control" id="name"
                                            name="metadata[design][title]"
                                            value="{{ $services['metadata']['design']['title'] }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Nội dung dịch vụ</label>
                                        <input type="text" class="form-control" id="title"
                                            name="metadata[design][content]"
                                            value="{{ $services['metadata']['design']['content'] }}">
                                    </div>

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fa fa-cog mr-1"></i>
                                        Thông tin dịch vụ chạy quảng cáo - facebook</h5>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Tiêu đề dịch vụ</label>
                                        <input type="text" class="form-control" id="name"
                                            name="metadata[facebook][title]"
                                            value="{{ $services['metadata']['facebook']['title'] }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Nội dung dịch vụ</label>
                                        <input type="text" class="form-control" id="title"
                                            name="metadata[facebook][content]"
                                            value="{{ $services['metadata']['facebook']['content'] }}">
                                    </div>

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fa fa-code mr-1"></i>
                                        Thông tin dịch vụ code phần mềm website</h5>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Tiêu đề dịch vụ</label>
                                        <input type="text" class="form-control" id="name"
                                            name="metadata[coder][title]"
                                            value="{{ $services['metadata']['coder']['title'] }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Nội dung dịch vụ</label>
                                        <input type="text" class="form-control" id="title"
                                            name="metadata[coder][content]"
                                            value="{{ $services['metadata']['coder']['content'] }}">
                                    </div>

                                    <button type="submit" class="btn btn-success mt-2"><i
                                            class="mdi mdi-content-save"></i>
                                        Lưu</button>
                                </form>
                            </div>
                            <!-- end settings content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card-box-->

                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
