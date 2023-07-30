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
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ env('WEBSITE_NAME') }}</a></li>
                                <li class="breadcrumb-item active">Trang chủ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thông tin trang chủ</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin trang chủ:</h4>

                            <p class="text-muted mb-2 font-13"><strong>Tên studio :</strong> <span
                                    class="ml-2">{{ isset($page->metadata['first']) ? $page->metadata['first'] : '' }}</span>
                            </p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Kiểu studio :</strong> <span
                                    class="ml-2 ">{{ isset($page->metadata['second']) ? $page->metadata['second'] : '' }}</span>
                            </p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Slogan:</strong> <span
                                    class="ml-2 ">{{ isset($page->metadata['third']) ? $page->metadata['third'] : '' }}</span>
                            </p>
                            </p>

                            </p>
                        </div>
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
                            <li class="nav-item">
                                <a href="#" class="nav-link btn-success" data-animation="fadein"
                                    data-overlaycolor="#38414a"><i class="mdi mdi-eye mr-1"></i>
                                    Xem trước</a>
                            </li>
                        </ul>
                        <!-- end card-->

                        <div class="card-body mt-1">
                            <h4 class="header-title m-t-0 mb-1">Thông tin trang chủ</h4>
                            <form action="{{ route('admin.pages.home.update', ['page' => 'trang-chu']) }}" method="POST"
                                enctype="multipart/form-data" novalidate="" class="needs-validation">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    {{-- @if ($errors->has('metadata'))
                                        <strong class="text-danger">{{ $errors->first('metadata') }}</strong>
                                    @endif --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first">Tên studio</label>
                                            <input type="text" class="form-control" id="first" name="metadata[first]"
                                                placeholder=""
                                                value="{{ isset($page->metadata['first']) && $page->metadata['first'] ? $page->metadata['first'] : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="second">Kiểu studio</label>
                                            <input type="text" class="form-control" id="second"
                                                name="metadata[second]" placeholder=""
                                                value="{{ isset($page->metadata['second']) && $page->metadata['second'] ? $page->metadata['second'] : '' }}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="third">Slogan</label>
                                            <textarea class="form-control" id="third" rows="6" name="metadata[third]" placeholder="">{{ isset($page->metadata['third']) && $page->metadata['third'] ? $page->metadata['third'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('metadata'))
                                    <div class="invalid-feedback text-danger">
                                        {{ $errors->first('metadata') }}
                                    </div>
                                @endif
                                <div class="text-left">
                                    <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i>
                                        Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end card-box-->
                    <!-- end row -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
@endsection
