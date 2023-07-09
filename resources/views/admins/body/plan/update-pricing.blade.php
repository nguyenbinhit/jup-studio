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
                            <form method="POST" action="{{ route('admin.plans.update',['plan' => $plan->uuid]) }}"
                                enctype="multipart/form-data" novalidate="" class="needs-validation">
                                @csrf
                                @method('PUT')
                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                    Thông tin bảng giá</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="nameprice">Tên bảng giá</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Tên bảng giá" value="{{ $plan->name }}" >
                                            {{-- @if ($errors->has('name'))
                                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                            @endif --}}
                                            <div class="invalid-feedback">
                                                Vui lòng nhập tên bảng giá!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Giá</label>
                                            <input type="number" class="form-control" id="price" name="price"
                                                placeholder="Giá" value="{{ $plan->price }}" >
                                            {{-- @if ($errors->has('price'))
                                            <strong class="text-danger">{{ $errors->first('price') }}</strong>
                                            @endif --}}
                                            <div class="invalid-feedback">
                                                Vui lòng nhập số lượng giá!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="description">Miêu tả</label>
                                        <textarea class="form-control" id="summernote-editor" name="description"
                                            rows="4"
                                            placeholder="Viết mô tả về bảng giá...">{{ $plan->description }}</textarea>
                                        {{-- @if ($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                        @endif --}}
                                    </div>
                                </div>
                                <h5 class="mb-3 text-uppercase bg-light p-2 mt-3"><i
                                        class="mdi mdi-account-circle mr-1"></i>
                                    Lợi ích chính</h5>
                                <div class="row">
                                    {{-- @if ($errors->has('benefits'))
                                    <strong class="text-danger">{{ $errors->first('benefits') }}</strong>
                                    @endif --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first">Một</label>
                                            <input type="text" class="form-control" id="first" name="first"
                                                placeholder=""
                                                value="{{  isset($plan->benefits['first']) && $plan->benefits['first'] ? $plan->benefits['first'] : '' }}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="second">Hai</label>
                                            <input type="text" class="form-control" id="second" name="second"
                                                placeholder=""
                                                value="{{ isset($plan->benefits['second']) && $plan->benefits['second'] ? $plan->benefits['second'] : '' }}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="third">Ba</label>
                                            <input type="text" class="form-control" id="third" name="third"
                                                placeholder=""
                                                value="{{ isset($plan->benefits['third']) && $plan->benefits['third'] ? $plan->benefits['third'] : '' }}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fourth" name="fourth">Bốn</label>
                                            <input type="text" class="form-control" id="fourth" name="fourth"
                                                placeholder=""
                                                value="{{ isset($plan->benefits['fourth']) && $plan->benefits['fourth'] ? $plan->benefits['fourth'] : '' }}">

                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                            class="mdi mdi-content-save"></i> Lưu</button>
                                </div>
                            </form>
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
