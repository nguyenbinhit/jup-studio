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

            @include('admins.body.notification')

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="inputPassword2" class="sr-only">Tìm kiếm</label>
                                        <input type="text" class="form-control" id="searchReview" name="s"
                                            placeholder="Tìm kiếm reviews...">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="{{ route('admin.pages.review.create') }}" class="btn btn-danger waves-effect"
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
                                <tbody id="row-list-reviews">
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
                                                    class="btn btn-xs btn-secondary ml-2"><i class="mdi mdi-pencil"></i></a>

                                                <a href="#custom-modal" data-animation="slide" data-plugin="custommodal"
                                                    data-overlaycolor="#38414a" class="btn btn-xs btn-secondary"><i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div class="text-right">
                        <div class="d-flex justify-content-end">
                            {!! $reviews->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title bg-success">Bạn có chắc không?</h4>
        <div class="custom-modal-text">
            Bạn sẽ không thể khôi phục review đã xóa!
            <div class="mt-1 d-flex d-flex justify-content-center">
                <button class="btn btn-primary mt-4 mr-2 w-25" onclick="Custombox.modal.close();">Không</button>
                <button class="btn btn-danger mt-4 ml-2 w-25" id="btnDelete">Có</button>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        function closeModal() {
            Custombox.modal.close();
        }

        $(document).ready(function() {
            $('#btnDelete').click(function() {
                $.ajax({
                    url: "{{ route('admin.pages.review.destroy', ['review' => $review->uuid]) }}",
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        closeModal();
                        window.location.href = "{{ route('admin.pages.review.index') }}";
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        closeModal();
                    }
                });
            });
        });

        $(document).ready(function() {
            function fetch_data_search(query) {
                $.ajax({
                    url: "{{ route('admin.pages.review.search') }}",
                    method: "GET",
                    data: {
                        s: query
                    },
                    dataType: 'json',
                    success: function(reviews) {
                        var reviewHtml = '';

                        $.each(reviews.data, function(index, review) {
                            var url = '';
                            var imagePath = '';
                            if (review.image && review.image.url) {
                                var urls = (review.image.url).split('/');
                                url = urls[1] + '/' + urls[2];
                                imagePath = `{{ asset('../..' . Storage::url('${url}')) }}`;
                            } else {
                                var imagePath =
                                    "{{ asset('../../bootstrap-admin/images/users/avatar-9.jpg') }}";
                            }

                            var start = '';
                            switch (review.stars) {
                                case 1:
                                    start += `
                                        <i class="fa fa-star" style="color: #84a1d2"></i> (1)
                                    `;
                                    break;
                                case 2:
                                    start += `
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i> (2)
                                        `;
                                    break;
                                case 3:
                                    start += `
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i> (3)
                                        `;
                                    break;
                                case 4:
                                    start += `
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i> (4)
                                        `;
                                    break;
                                case 5:
                                    start += `
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i>
                                            <i class="fa fa-star" style="color: #84a1d2"></i> (5)
                                        `;
                                    break;
                                default:
                                    break;
                            }

                            reviewHtml += `
                                <tr>
                                    <td>
                                        <img src="${imagePath}"
                                            alt="" width="50" height="50"
                                            class="rounded-circle img-thumbnail avatar-lg">
                                    </td>
                                    <td>
                                        <h5 class="m-0 font-weight-normal">${review.customer_name}</h5>
                                    </td>
                                    <td>
                                        <h5 class="m-0 font-weight-normal">${review.customer_email}</h5>
                                    </td>
                                    <td>
                                        ${start}
                                    </td>
                                    <td>
                                        <div
                                            style="white-space: nowrap;
                                        width: 250px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">

                                            ${review.comment}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="/admins/review-pages/${review.uuid}" class="btn btn-xs btn-secondary ml-2"><i class="mdi mdi-pencil"></i></a>

                                        <a href="#custom-modal" data-animation="slide" data-plugin="custommodal"
                                            data-overlaycolor="#38414a" class="btn btn-xs btn-secondary"><i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            `;

                            $('#row-list-reviews').html(reviewHtml);
                        });
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }

            $(document).on('keyup', '#searchReview', function() {
                var query = $(this).val();

                fetch_data_search(query);
            });
        });
    </script>
@endpush
