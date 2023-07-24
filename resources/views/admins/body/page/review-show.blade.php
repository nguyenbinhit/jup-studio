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
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Chi tiết review #{{ $review->id }}R{{ $review->stars }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        <img src="{{ $review->image?->url ? asset('../..' . Storage::url($review->image->url)) : asset('../bootstrap-admin/images/users/avatar-1.jpg') }}"
                            class="rounded-circle img-thumbnail avatar-xxl" alt="profile-image"
                            style="width: 8rem; height: auto;">

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin review:</h4>
                            <p class="text-muted mb-2 font-13"><strong>Tên khách hàng :</strong> <span
                                    class="ml-2">{{ $review->customer_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                    class="ml-2 ">{{ $review->customer_email }}</span></p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Số sao đánh giá :</strong> <span class="ml-2">
                                    @php
                                        switch ($review->stars) {
                                            case 1:
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo ' (1)';
                                                break;
                                            case 2:
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo ' (2)';
                                                break;
                                            case 3:
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo ' (3)';
                                                break;
                                            case 4:
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo ' (4)';
                                                break;
                                            case 5:
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo '<i class="fa fa-star" style="color: #84a1d2"></i>';
                                                echo ' (5)';
                                                break;
                                            default:
                                                break;
                                        }
                                    @endphp
                                </span>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Ngày tạo :</strong> <span
                                    class="ml-2 ">{{ $review->created_at }}</span></p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Nội dung đánh giá :</strong> <span
                                    class="ml-2 ">{{ $review->comment }}</span></p>
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

                        <div class="card-body">
                            <h4 class="header-title m-t-0 mb-1">Tải lên file Logo</h4>
                            <form action="{{ route('admin.pages.logo.update', ['page' => 'logo']) }}" method="POST"
                                class="dropzone" id="myAwesomeDropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="fallback">
                                    <input name="file" type="file" id="file">
                                </div>

                                <div class="dz-message needsclick">
                                    <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                    <h3>Kéo thả file logo ở đây hoặc bấm vào để tải lên.</h3>
                                </div>
                            </form>

                            <div class="text-lg-right mt-1">
                                <button id="uploadFile" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i>
                                    Lưu</button>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                    <!-- end row -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
@endsection
