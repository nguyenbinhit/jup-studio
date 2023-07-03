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
                                <li class="breadcrumb-item active">Hồ sơ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bảng giá {{ $plan->name }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        <div class="card card-pricing">
                            <div class="card-body text-center">
                                <p class="card-pricing-plan-name font-weight-bold text-uppercase">
                                    {{ $plan->name }}</p>
                                <h2 class="card-pricing-price" style="padding:unset">{{ $plan->price }} <span>/
                                        Month</span></h2>
                                <ul class="card-pricing-features">
                                    <li>{{ $plan->benefits['first'] }}</li>
                                    <li>{{ $plan->benefits['second'] }}</li>
                                    <li>{{ $plan->benefits['third'] }}</li>
                                    <li>{{ $plan->benefits['fourth'] }}</li>
                                </ul>
                            </div>
                        </div> <!-- end Pricing_card -->
                    </div> <!-- end card-box -->
                </div> <!-- end col-->

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

                            </div>
                            <!-- end settings content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card-box-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
