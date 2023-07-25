@extends('admins.index')
@section('content')
    <div class="content">
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
                        <h4 class="page-title">Khách hàng reviews</h4>
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
                                        <input type="text" class="form-control" id="search" name="s"
                                            placeholder="Tìm kiếm reviews...">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="{{ route('admin.pages.review.store') }}" class="btn btn-danger waves-effect"
                                        data-animation="fadein" data-overlaycolor="#38414a"><i
                                            class="mdi mdi-plus-circle mr-1"></i> Thêm mới</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div><!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-centered m-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Ảnh đại diện</th>
                                        <th>Tên khách hàng</th>
                                        <th>Email khách hàng</th>
                                        <th>Số sao đánh giá</th>
                                        <th>Nội dung</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('../..' . Storage::url($review->image->url)) }}"
                                                    alt="" width="50" height="50"
                                                    class="rounded-circle img-thumbnail avatar-lg">
                                            </td>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">{{ $review->customer_name }}</h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">{{ $review->customer_email ?? '' }}</h5>
                                            </td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <div
                                                    style="white-space: nowrap;
                                                width: 250px;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">

                                                    {{ $review->comment }}
                                                </div>

                                            </td>
                                            <td>
                                                <a href="{{ route('admin.pages.review.show', ['review' => $review->uuid]) }}"
                                                    class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
