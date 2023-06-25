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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">JupStudio</a></li>
                                <li class="breadcrumb-item active">Thành viên studio</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Xin chào {{ auth()->user()->name }} !</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="inputPassword2" class="sr-only">Tìm kiếm</label>
                                        <input type="search" class="form-control" id="inputPassword2"
                                            placeholder="Search...">
                                    </div>
                                    <div class="form-group mx-sm-3">
                                        <label for="status-select" class="mr-2">Sắp xếp theo</label>
                                        <select class="custom-select" id="status-select">
                                            <option selected="">Tất cả</option>
                                            <option value="name">Theo tên</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="#custom-modal" class="btn btn-danger waves-effect waves-light"
                                        data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i
                                            class="mdi mdi-plus-circle mr-1"></i> Thêm mới</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div><!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                @foreach ($employees as $employee)
                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="pt-2 pb-2">
                                <img src="{{ $employee->image?->url ?? asset('../bootstrap-admin/images/users/avatar-9.jpg') }}"
                                    class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                {{-- TODO: profile url --}}
                                <h4 class="mt-3 font-17"><a href="extras-profile.html"
                                        class="text-dark">{{ $employee->name }}</a></h4>
                                <p class="text-muted">{{ $employee->position }} <span> | </span> <span> <a href="#"
                                            class="text-pink">{{ $employee->email }}</a> </span></p>

                                <p class="text-muted font-13 mb-3">
                                    {{ $employee->description }}
                                </p>

                                <ul class="social-list list-inline mt-3 mb-0">
                                    @foreach ($employee->socials as $key => $value)
                                        @if ($key === 'google')
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-danger text-danger"><i
                                                        class="mdi mdi-google"></i></a>
                                            </li>
                                        @endif
                                        @if ($key === 'facebook')
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-purple text-purple"><i
                                                        class="mdi mdi-facebook"></i></a>
                                            </li>
                                        @endif
                                        @if ($key === 'twitter')
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-info text-info"><i
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

                            </div> <!-- end .padding -->
                        </div> <!-- end card-box-->
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="text-right">
                        <ul class="pagination pagination-rounded justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
