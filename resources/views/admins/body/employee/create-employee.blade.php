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
                                <li class="breadcrumb-item active">Thêm mới thành viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm mới thành viên</h4>
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
                                <form method="POST" action="{{ route('admin.employees.store') }}"
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-fileinput">Hình ảnh đại diện</label>
                                                <input type="file" class="form-control" name="file" id="file"
                                                    style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                                @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Chức vụ</label>
                                                <input type="text" class="form-control" name="position" id="position"
                                                    placeholder="Chức vụ">
                                                @if ($errors->has('position'))
                                                    <strong class="text-danger">{{ $errors->first('position') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-0">
                                                <div class="card-body p-0">
                                                    <label for="userbio">Mô tả</label>

                                                    <textarea class="form-control" id="summernote-editor" name="description" rows="4"
                                                        placeholder="Viết mô tả về chính bạn..."></textarea>
                                                    @if ($errors->has('description'))
                                                        <strong
                                                            class="text-danger">{{ $errors->first('description') }}</strong>
                                                    @endif
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div><!-- end col -->
                                    </div>

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i>
                                        Mạng xã hội</h5>
                                    <div class="row">
                                        @if ($errors->has('socials'))
                                            <strong class="text-danger">{{ $errors->first('socials') }}</strong>
                                        @endif
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-google">Google</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-google"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-google"
                                                        placeholder="Email" name="socials[google]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-fb">Facebook</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-facebook-square"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-fb"
                                                        placeholder="Url" name="socials[facebook]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-tw">Twitter</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-twitter"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-tw"
                                                        placeholder="Username" name="socials[twitter]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-gh">Github</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-github"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-gh"
                                                        placeholder="Username" name="socials[github]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-insta">Instagram</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fab fa-instagram"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-insta"
                                                        placeholder="Url" name="socials[instagram]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-sky">Skype</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-sky"
                                                        placeholder="@username" name="socials[skype]">
                                                </div>
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
