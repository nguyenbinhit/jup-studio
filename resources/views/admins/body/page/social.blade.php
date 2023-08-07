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
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ env('WEBSITE_NAME') }}</a>
                                </li>
                                <li class="breadcrumb-item active">Mạng xã hội</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý mạng xã hội</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        <div class="text-left mt-1">
                            <h4 class="font-18 text-uppercase text-center mb-2">Thông tin mạng xã hội:</h4>
                            @foreach ($social['metadata'] as $key => $value)
                                <p class="text-muted mb-2 font-13"><strong class="text-capitalize">{{ $key }}
                                        :</strong> <span class="ml-2">{{ $value }}</span></p>
                            @endforeach
                        </div>
                    </div> <!-- end card-box -->
                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <ul class="nav nav-pills navtab-bg">
                            <li class="nav-item" style="margin-left: 19px;">
                                <a href="#" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <i class="mdi mdi-settings-outline mr-1"></i>Cập nhật
                                </a>
                            </li>

                        </ul>
                        <!-- end card-->

                        <div class="tab-content">
                            <div class="tab-pane show active" id="settings">
                                <form method="POST"
                                    action="{{ route('admin.pages.social.update', ['page' => $social->slug]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i>
                                        Mạng xã hội</h5>
                                    <div class="row">
                                        @if ($errors->has('metadata'))
                                            <strong class="text-danger">{{ $errors->first('metadata') }}</strong>
                                        @endif
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-google">Google</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-google"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-google"
                                                        placeholder="Email" name="metadata[google]"
                                                        value="{{ isset($social->metadata['google']) && $social->metadata['google'] ? $social->metadata['google'] : '' }}">
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
                                                        placeholder="Url" name="metadata[facebook]"
                                                        value="{{ isset($social->metadata['facebook']) && $social->metadata['facebook'] ? $social->metadata['facebook'] : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-tw">Twitter</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-tw"
                                                        placeholder="Username" name="metadata[twitter]"
                                                        value="{{ isset($social->metadata['twitter']) && $social->metadata['twitter'] ? $social->metadata['twitter'] : '' }}">
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
                                                        placeholder="Url" name="metadata[instagram]"
                                                        value="{{ isset($social->metadata['instagram']) && $social->metadata['instagram'] ? $social->metadata['instagram'] : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="social-yt">Youtube</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="social-youtube"
                                                        placeholder="Url" name="metadata[youtube]"
                                                        value="{{ isset($social->metadata['youtube']) && $social->metadata['youtube'] ? $social->metadata['youtube'] : '' }}">
                                                </div>
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
                    <!-- end row -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
@endsection
