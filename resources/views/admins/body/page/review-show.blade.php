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
                                <li class="breadcrumb-item"><a href="{{ route('admin.pages.review.index') }}">Reviews</a></li>
                                <li class="breadcrumb-item active">Cập nhật</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Chi tiết review (ID: #{{ $review->id }}R{{ $review->stars }})</h4>
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
                            <p class="text-muted mb-2 font-13"><strong>Nội dung đánh giá :</strong> <span
                                    class="ml-2 ">{{ $review->comment }}</span></p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Ngày tạo :</strong> <span
                                    class="ml-2 ">{{ $review->created_at }}</span></p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Ngày cập nhật :</strong> <span
                                    class="ml-2 ">{{ $review->updated_at }}</span></p>
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
                        <!-- end card-->

                        <div class="tab-content">
                            <div class="tab-pane show active" id="settings">
                                <form method="POST"
                                    action="{{ route('admin.pages.review.update', ['review' => $review->uuid]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-star-circle mr-1"></i>
                                        Thông tin review</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ và tên</label>
                                                <input type="text" class="form-control" name="customer_name"
                                                    id="customer_name" placeholder="Họ và tên"
                                                    value="{{ $review->customer_name }}">
                                                @if ($errors->has('customer_name'))
                                                    <strong
                                                        class="text-danger">{{ $errors->first('customer_name') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" name="customer_email"
                                                    id="customer_email" placeholder="Email"
                                                    value="{{ $review->customer_email }}">
                                                @if ($errors->has('customer_email'))
                                                    <strong
                                                        class="text-danger">{{ $errors->first('customer_email') }}</strong>
                                                @endif
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-fileinput">Hình ảnh đại diện</label>
                                                <input type="file" class="form-control" name="file" id="file"
                                                    value="{{ $review->image?->url }}"
                                                    style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                                @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                                @if ($review->image && $review->image->url)
                                                    <img src="{{ asset('../..' . Storage::url($review->image->url)) }}"
                                                        alt="" width="50" height="50"
                                                        class="rounded-circle img-thumbnail avatar-lg mt-1">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Số sao đánh giá</label>
                                                <input type="number" class="form-control" name="stars" id="stars"
                                                    placeholder="Số sao đánh giá" value="{{ $review->stars }}" min="1" max="5">
                                                @if ($errors->has('stars'))
                                                    <strong class="text-danger">{{ $errors->first('stars') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border-0">
                                                <div class="card-body p-0">
                                                    <label for="userbio">Mô tả</label>
                                                    <textarea class="form-control" name="comment" rows="10" placeholder="Đánh giá của khách hàng...">{{ $review->comment }}</textarea>
                                                    @if ($errors->has('comment'))
                                                        <strong
                                                            class="text-danger">{{ $errors->first('comment') }}</strong>
                                                    @endif
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div><!-- end col -->
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
