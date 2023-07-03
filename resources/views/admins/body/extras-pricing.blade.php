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
                        <h3 class="mb-2">Our <span class="text-primary">Bảng giá của chúng tôi</span></h3>
                        {{-- <p class="text-muted w-50 m-auto">
                            We have plans and prices that fit your business perfectly. Make your client site a success with
                            our products.
                        </p> --}}
                    </div>

                    <!-- Plans -->
                    <div class="row my-3">
                        @foreach ($prices as $price)
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-pricing">
                                    <div class="card-body text-center">
                                        <p class="card-pricing-plan-name font-weight-bold text-uppercase">
                                            {{ $price->name }}</p>
                                        {{-- <span class="card-pricing-icon text-primary">
                                    <i class="fe-at-sign"></i>
                                </span> --}}
                                        <h2 class="card-pricing-price" style="padding:unset">{{ $price->price }} <span>/
                                                Month</span></h2>
                                        <ul class="card-pricing-features">

                                            <li>{{ $price->benefits['first'] }}</li>
                                            <li>{{ $price->benefits['second'] }}</li>
                                            <li>{{ $price->benefits['third'] }}</li>
                                            <li>{{ $price->benefits['fourth'] }}</li>

                                        </ul>

                                        <a class="btn btn-primary mt-4 mr-1"
                                            href="{{ route('admin.plans.show', ['plan' => $price->uuid]) }}">
                                            Cập nhật
                                        </a>
                                        <a href="#custom-modal" data-animation="fadein" data-plugin="custommodal">
                                            <button class="btn btn-danger mt-4 ml-1" style="width:87.95px">Xóa</button>
                                        </a>
                                    </div>
                                </div> <!-- end Pricing_card -->
                            </div> <!-- end col -->
                        @endforeach
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
