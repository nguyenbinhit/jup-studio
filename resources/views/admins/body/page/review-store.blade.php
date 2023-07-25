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
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm mới review của khách hàng</h4>
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
                                <form method="POST" action="{{ route('admin.pages.review.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-star-circle mr-1"></i>
                                        Thông tin review</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Họ và tên</label>
                                                <input type="text" class="form-control" name="customer_name"
                                                    id="customer_name" placeholder="Họ và tên">
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
                                                    id="customer_email" placeholder="Email">
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
                                                    style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                                @if ($errors->has('file'))
                                                    <strong class="text-danger">{{ $errors->first('file') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Số sao đánh giá</label>
                                                <input type="number" class="form-control" name="stars" id="stars"
                                                    placeholder="Số sao đánh giá" min="1" max="5">
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
                                                    <textarea class="form-control" name="comment" rows="10" placeholder="Đánh giá của khách hàng..."></textarea>
                                                    @if ($errors->has('comment'))
                                                        <strong class="text-danger">{{ $errors->first('comment') }}</strong>
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

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
