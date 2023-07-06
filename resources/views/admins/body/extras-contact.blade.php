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
                                <li class="breadcrumb-item active">Liên hệ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thông tin liên hệ</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        {{-- @if ($employee->status === 'publish')
                            <div class="ribbon-two ribbon-two-primary"><span>Công bố</span></div>
                        @else
                            <div class="ribbon-two ribbon-two-danger"><span>Ẩn công bố</span></div>
                        @endif --}}

                        <h4 class="mb-0"></h4>
                        <p class="text-muted"></p>

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin cá nhân:</h4>
                            <p class="text-muted mb-2 font-13"><strong>Họ và tên :</strong> <span class="ml-2"></span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "></span></p>
                            </p>
                            <p class="text-muted font-13 mb-3">
                                <strong>Mô tả :</strong> <br>

                            </p>
                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            {{-- @foreach ($employee->socials as $key => $value)
                                @if ($key === 'google' && $employee->socials['google'])
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                class="mdi mdi-google"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'facebook' && $employee->socials['facebook'])
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i
                                                class="mdi mdi-facebook"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'twitter' && $employee->socials['twitter'])
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                class="mdi mdi-twitter"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'github' && $employee->socials['github'])
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);"
                                            class="social-list-item border-secondary text-secondary"><i
                                                class="mdi mdi-github-circle"></i></a>
                                    </li>
                                @endif
                            @endforeach --}}
                        </ul>
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
                                <form  enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                        Thông tin liên hệ</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Địa chỉ</label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Địa chỉ" value="">
                                                {{-- @if ($errors->has('name'))
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                @endif --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="">
                                                {{-- @if ($errors->has('email'))
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                @endif --}}
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Số điện thoại</label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Địa chỉ" value="">
                                                {{-- @if ($errors->has('name'))
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                @endif --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email </label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="">
                                                {{-- @if ($errors->has('email'))
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                @endif --}}
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-fileinput">Hình ảnh đại diện</label>
                                                <input type="text" class="form-control" name="file" id="file"
                                                    value="" >
                                                {{-- @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                                @if ($employee->image && $employee->image->url)
                                                    <img src="{{ asset('../..' . Storage::url($employee->image->url)) }}"
                                                        alt="" width="50" height="50">
                                                @endif --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Chức vụ</label>
                                                <input type="text" class="form-control" name="position" id="position"
                                                    placeholder="Chức vụ" value="">
                                                {{-- @if ($errors->has('position'))
                                                    <strong class="text-danger">{{ $errors->first('position') }}</strong>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
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
