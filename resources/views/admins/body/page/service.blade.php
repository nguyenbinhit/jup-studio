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

                h5 {
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

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center row">
                        <div class="col-12 mb-4">
                            <div class="about-box mb-5 mb-lg-0 mx-auto" style="background-color: #84a1d2">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-pencil-alt"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">branding
                                    design</h5>
                                <p class="font-weight-light color-white">Lorem
                                    dapibus, tortor eget turpis auctor, convallis
                                    odio ac.</p>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="about-box mb-5 mb-lg-0 mx-auto" style="background-color: #f1c30f">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-cog"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px">SEO
                                    Marketing</h5>
                                <p class="font-weight-light color-white">Etiam
                                    luctus, lacus maximus elementum dapibus felis.</p>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="about-box mb-0 mx-auto" style="background-color: #e57bff">
                                <span class="pro-step d-inline-block color-white"><i class="fa fa-code"></i></span>
                                <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">web
                                    development</h5>
                                <p class="font-weight-light color-white">Pellentesque
                                    habitant morbi tristique senectus et malesuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
