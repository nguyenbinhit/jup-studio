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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jup studio</a></li>
                                <li class="breadcrumb-item active">Quản lý liên hệ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý liên hệ</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="font-13 bg-light text-muted">
                                    <tr>
                                        <th class="font-weight-medium">Tên</th>
                                        <th class="font-weight-medium">Email</th>
                                        <th class="font-weight-medium">Số điện thoại</th>
                                        <th class="font-weight-medium">Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <a href="#custom-modal" data-animation="slide" data-plugin="custommodal"
                                                data-overlaycolor="#38414a">
                                                <td class="text-muted font-13">{{ $contact->name }}</td>
                                                <td class="text-muted font-13">{{ $contact->email }}</td>
                                                <td class="text-muted font-13">{{ $contact->phone }}</td>
                                                <td class="text-muted font-13">{{ $contact->note }}</td>
                                            </a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-12">
                    <div class="text-right">
                        <div class="d-flex justify-content-end">
                            {!! $contacts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->

    <!-- Custom Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Bạn có chắc không?</h4>
        <div class="custom-modal-text">
            Bạn sẽ không thể khôi phục bảng giá đã xóa!
            <div class="mt-1 d-flex d-flex justify-content-center">
                <button class="btn btn-primary mt-4 mr-2 w-25" onclick="Custombox.modal.close();">Không</button>
                <button class="btn btn-danger mt-4 ml-2 w-25" id="btnDelete">Có</button>
            </div>

        </div>
    </div>
@endsection
