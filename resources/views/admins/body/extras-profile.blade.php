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
                        <h4 class="page-title">Hồ sơ thông tin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        @if ($employee->status === 'publish')
                            <div class="ribbon-two ribbon-two-primary"><span>Công bố</span></div>
                        @else
                            <div class="ribbon-two ribbon-two-danger"><span>Ẩn công bố</span></div>
                        @endif
                        <div class="clearfix"></div>
                        <img src="{{ $employee->image?->url ? asset('../..' . Storage::url($employee->image->url)) : asset('../bootstrap-admin/images/users/avatar-1.jpg') }}"
                            class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                        <h4 class="mb-0">{{ $employee->name }}</h4>
                        <p class="text-muted">{{ $employee->position }}</p>

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin cá nhân:</h4>
                            <p class="text-muted mb-2 font-13"><strong>Họ và tên :</strong> <span
                                    class="ml-2">{{ $employee->name }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                    class="ml-2 ">{{ $employee->email }}</span></p>
                            </p>
                            <p class="text-muted font-13 mb-3">
                                <strong>Mô tả :</strong>
                                <?php echo $employee->description; ?>
                            </p>
                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            @foreach ($employee->socials as $key => $value)
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
                            @endforeach
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
                                <form method="POST"
                                    action="{{ route('admin.employees.update', ['employee' => $employee->uuid]) }}"
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
                                                    placeholder="Họ và tên" value="{{ $employee->name }}">
                                                @if ($errors->has('name'))
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="{{ $employee->email }}">
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
                                                    value="{{ $employee->image?->url }}"
                                                    style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                                @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                                @if ($employee->image && $employee->image->url)
                                                    <img src="{{ asset('../..' . Storage::url($employee->image->url)) }}"
                                                        alt="" width="50" height="50">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Chức vụ</label>
                                                <input type="text" class="form-control" name="position"
                                                    id="position" placeholder="Chức vụ"
                                                    value="{{ $employee->position }}">
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
                                                            class="custom-control-input" value="publish"
                                                            {{ $employee->status === 'publish' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customRadio1">Công
                                                            bố</label>
                                                    </div>
                                                    <div class="custom-control custom-radio ml-3">
                                                        <input type="radio" id="customRadio2" name="status"
                                                            class="custom-control-input" value="unpublish"
                                                            {{ $employee->status === 'unpublish' ? 'checked' : '' }}>
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
                                                        placeholder="Viết mô tả về chính bạn...">{{ $employee->description }}</textarea>
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
                                                        placeholder="Email" name="socials[google]"
                                                        value="{{ isset($employee->socials['google']) && $employee->socials['google'] ? $employee->socials['google'] : '' }}">
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
                                                        placeholder="Url" name="socials[facebook]"
                                                        value="{{ isset($employee->socials['facebook']) && $employee->socials['facebook'] ? $employee->socials['facebook'] : '' }}">
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
                                                        placeholder="Username" name="socials[twitter]"
                                                        value="{{ isset($employee->socials['twitter']) && $employee->socials['twitter'] ? $employee->socials['twitter'] : '' }}">
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
                                                        placeholder="Username" name="socials[github]"
                                                        value="{{ isset($employee->socials['github']) && $employee->socials['github'] ? $employee->socials['github'] : '' }}">
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
                                                        placeholder="Url" name="socials[instagram]"
                                                        value="{{ isset($employee->socials['instagram']) && $employee->socials['instagram'] ? $employee->socials['instagram'] : '' }}">
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
                                                        placeholder="@username" name="socials[skype]"
                                                        value="{{ isset($employee->socials['skype']) && $employee->socials['skype'] ? $employee->socials['skype'] : '' }}">
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
