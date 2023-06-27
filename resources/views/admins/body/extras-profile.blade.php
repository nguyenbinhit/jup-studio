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
                    <div class="card-box text-center">
                        <img src="{{ $employee->image?->url ?? asset('../bootstrap-admin/images/users/avatar-1.jpg') }}"
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
                                <strong>Mô tả :</strong> <br>
                                {{ $employee->description }}
                            </p>
                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            @foreach ($employee->socials as $key => $value)
                                @if ($key === 'google')
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                class="mdi mdi-google"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'facebook')
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i
                                                class="mdi mdi-facebook"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'twitter')
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                class="mdi mdi-twitter"></i></a>
                                    </li>
                                @endif
                                @if ($key === 'github')
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
                                <form>
                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                        Thông tin cá nhân</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ và tên</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter họ và tên" value="{{ $employee->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Enter email" value="{{ $employee->email }}">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="userbio">Mô tả</label>
                                                <textarea class="form-control" id="userbio" rows="4" placeholder="Viết mô tả về chính bạn...">{{ $employee->description }}</textarea>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i>
                                        Mạng xã hội</h5>
                                    <div class="row">
                                        @foreach ($employee->socials as $key => $value)
                                            @if ($key === 'google')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-google">Google</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-google"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-google"
                                                                placeholder="Email" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($key === 'facebook')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-fb">Facebook</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-facebook-square"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-fb"
                                                                placeholder="Url" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($key === 'twitter')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-tw">Twitter</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-twitter"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-tw"
                                                                placeholder="Username" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($key === 'github')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-gh">Github</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-github"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-gh"
                                                                placeholder="Username" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($key === 'instagram')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-insta">Instagram</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-instagram"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-insta"
                                                                placeholder="Url" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($key === 'skype')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="social-sky">Skype</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fab fa-skype"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="social-sky"
                                                                placeholder="@username" value="{{ $value }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
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
