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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ứng dụng</a></li>
                                <li class="breadcrumb-item active">Quản lý tập tin</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý tập tin</h4>
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
                                        <th class="font-weight-medium">Tên tệp</th>
                                        <th class="font-weight-medium">Ngày tạo</th>
                                        <th class="font-weight-medium">Kích cỡ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $key => $item)
                                        <tr>
                                            <td>
                                                <img src="{{ $item->url }}" height="30" alt="icon" class="mr-2">
                                                <a href="javascript:void(0);" class="text-dark">{{ $item->name }}</a>
                                            </td>
                                            <td class="text-muted font-13">{{ $item->updated_at }}</td>
                                            <td>{{ $item->size }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
