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
                                <li class="breadcrumb-item active">Thêm mới tài khoản</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm mới tài khoản</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <ul class="nav nav-pills navtab-bg">
                            <li class="nav-item">
                                <a href="#" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <i class="mdi mdi-settings-outline mr-1"></i>Thêm mới
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="settings">
                                <form method="POST" action="{{ route('admin.users.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                        Thông tin cá nhân</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ và tên</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Họ và tên">
                                                @if ($errors->has('name'))
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                                @if ($errors->has('email'))
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                @endif
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-fileinput">Hình ảnh đại diện</label>
                                                <input type="file" class="form-control" name="file" id="file"
                                                    style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                                @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userpassword">Mật khẩu</label>
                                                <input type="text" class="form-control" name="password" id="password"
                                                    placeholder="Mật khẩu">
                                                @if ($errors->has('password'))
                                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="useremail">Trạng thái</label>
                                                <div class="row flex" style="padding: 0.45rem 0.9rem">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="status"
                                                            class="custom-control-input" value="publish">
                                                        <label class="custom-control-label" for="customRadio1">Công
                                                            bố</label>
                                                    </div>
                                                    <div class="custom-control custom-radio ml-3">
                                                        <input type="radio" id="customRadio2" name="status"
                                                            class="custom-control-input" value="unpublish">
                                                        <label class="custom-control-label" for="customRadio2">Huỷ công
                                                            bố</label>
                                                    </div>
                                                </div>
                                                @if ($errors->has('status'))
                                                    <strong class="text-danger">{{ $errors->first('status') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div> --}}

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
