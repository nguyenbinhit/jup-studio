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
                                <li class="breadcrumb-item active">Quản lý thông tin</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý thông tin liên hệ khách hàng</h4>
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
                                            <td class="text-muted font-13">{{ $contact->name }}</td>
                                            <td class="text-muted font-13">{{ $contact->email }}</td>
                                            <td class="text-muted font-13">{{ $contact->phone }}</td>
                                            <td class="text-muted font-13">{{ $contact->note }}</td>
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
@endsection
