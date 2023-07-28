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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('WEBSITE_NAME') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý tài khoản</a></li>
                                <li class="breadcrumb-item active">Hồ sơ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Hồ sơ thông tin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin cá nhân:</h4>
                            <p class="text-muted mb-2 font-13"><strong>Họ và tên :</strong> <span
                                    class="ml-2">{{ $user->name }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                    class="ml-2 ">{{ $user->email }}</span></p>
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
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="settings">
                                <form method="POST" action="{{ route('admin.users.update', ['user' => $user->uuid]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                        Thông tin cá nhân</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ và tên</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Họ và tên" value="{{ $user->name }}">
                                                @if ($errors->has('name'))
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="{{ $user->email }}">
                                                @if ($errors->has('email'))
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                @endif
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userpassword">Mật khẩu mới</label>
                                                <input type="text" class="form-control" name="password" id="password"
                                                    placeholder="Mật khẩu">
                                                @if ($errors->has('password'))
                                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    @if (auth()->user()->email === 'administrator@gmail.com')
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-success waves-effect mt-2"><i
                                                    class="mdi mdi-content-save"></i> Lưu</button>
                                        </div>
                                    @endif
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
