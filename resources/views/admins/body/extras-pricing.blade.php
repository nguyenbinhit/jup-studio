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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                <li class="breadcrumb-item active">Pricing</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Pricing</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-xl-12">

                    <!-- Pricing Title-->
                    <div class="text-center pb-2">
                        <h3 class="mb-2">Our <span class="text-primary">Plans</span></h3>
                        <p class="text-muted w-50 m-auto">
                            We have plans and prices that fit your business perfectly. Make your client site a success with
                            our products.
                        </p>
                    </div>

                    <!-- Plans -->
                    <div class="row my-3">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-pricing">
                                <div class="card-body text-center">
                                    <p class="card-pricing-plan-name font-weight-bold text-uppercase">Starter Pack</p>
                                    {{-- <span class="card-pricing-icon text-primary">
                                    <i class="fe-at-sign"></i>
                                </span> --}}
                                    <h2 class="card-pricing-price">$9 <span>/ Month</span></h2>
                                    <ul class="card-pricing-features">
                                        <li>5 GB Storege</li>
                                        <li>250 GB Bandwidth</li>
                                        <li>No Domain</li>
                                        <li>1 User</li>
                                        <li>Email Support</li>
                                        <li>24x7 Support</li>
                                    </ul>
                                    <button class="btn btn-primary mt-4 mr-1">Cập nhật</button>
                                    <a href="#custom-modal" data-animation="fadein" data-plugin="custommodal">
                                        <button class="btn btn-danger mt-4 ml-1" style="width:87.95px">Xóa</button>
                                    </a>
                                </div>
                            </div> <!-- end Pricing_card -->
                        </div> <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-pricing">
                                <div class="card-body text-center">
                                    <p class="card-pricing-plan-name font-weight-bold text-uppercase">Professional Pack</p>
                                    {{-- <span class="card-pricing-icon text-primary">
                                    <i class="fe-users"></i>
                                </span> --}}
                                    <h2 class="card-pricing-price">$19 <span>/ Month</span></h2>
                                    <ul class="card-pricing-features">
                                        <li>10 GB Storage</li>
                                        <li>500 GB Bandwidth</li>
                                        <li>No Domain</li>
                                        <li>1 User</li>
                                        <li>Email Support</li>
                                        <li>24x7 Support</li>
                                    </ul>
                                    <button class="btn btn-primary mt-4 mr-1">Cập nhật</button>
                                    <a href="#custom-modal" data-animation="slide" data-plugin="custommodal"
                                        data-overlaycolor="#38414a">
                                        <button class="btn btn-danger mt-4 ml-1" style="width:87.95px">Xóa</button>
                                    </a>
                                </div>
                            </div> <!-- end Pricing_card -->
                        </div> <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-pricing ribbon-box">
                                <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                <div class="card-body text-center">
                                    <p class="card-pricing-plan-name font-weight-bold text-uppercase">Business Pack</p>
                                    {{-- <span class="card-pricing-icon bg-danger text-white">
                                    <i class="fe-award"></i>
                                </span> --}}
                                    <h2 class="card-pricing-price">$29 <span>/ Month</span></h2>
                                    <ul class="card-pricing-features">
                                        <li>50 GB Storage</li>
                                        <li>900 GB Bandwidth</li>
                                        <li>2 Domain</li>
                                        <li>10 User</li>
                                        <li>Email Support</li>
                                        <li>24x7 Support</li>
                                    </ul>
                                    <button class="btn btn-primary mt-4 mr-1">Cập nhật</button>
                                    <a href="#custom-modal" data-animation="fadein" data-plugin="custommodal">
                                        <button class="btn btn-danger mt-4 ml-1" style="width:87.95px">Xóa</button>
                                    </a>
                                </div>
                            </div> <!-- end Pricing_card -->
                        </div> <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-pricing">
                                <div class="card-body text-center">
                                    <p class="card-pricing-plan-name font-weight-bold text-uppercase">Enterprise Pack</p>
                                    {{-- <span class="card-pricing-icon text-primary">
                                    <i class="fe-aperture"></i>
                                </span> --}}
                                    <h2 class="card-pricing-price">$39 <span>/ Month</span></h2>
                                    <ul class="card-pricing-features">
                                        <li>100 GB Storege</li>
                                        <li>Unlimited Bandwidth</li>
                                        <li>10 Domain</li>
                                        <li>Unlimited User</li>
                                        <li>Email Support</li>
                                        <li>24x7 Support</li>
                                    </ul>
                                    <button class="btn btn-primary mt-4 mr-1">Cập nhật</button>
                                    <a href="#custom-modal" data-animation="fadein" data-plugin="custommodal">
                                        <button class="btn btn-danger mt-4 ml-1" style="width:87.95px">Xóa</button>
                                    </a>
                                </div>
                            </div> <!-- end Pricing_card -->
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->

                </div> <!-- end col-->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Custom Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Bạn có chắc không?</h4>
        <div class="custom-modal-text">
            Bạn sẽ không thể khôi phục bảng giá đã xóa!
            <div class="mt-1 d-flex d-flex justify-content-center">
                <button class="btn btn-primary mt-4 mr-2 w-25" onclick="Custombox.modal.close();">Không</button>
                <button class="btn btn-danger mt-4 ml-2 w-25">Có</button>
            </div>

        </div>
    </div>
@endsection
