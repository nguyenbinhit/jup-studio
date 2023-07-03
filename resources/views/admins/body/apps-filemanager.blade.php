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
                                    @foreach ($images as $image)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('../..' . Storage::url($image->url)) }}" height="30"
                                                    alt="icon" class="mr-2">
                                                <a href="javascript:void(0);" class="text-dark">{{ $image->alt }}</a>
                                            </td>
                                            <td class="text-muted font-13">{{ $image->created_at }}</td>

                                            <td>
                                                @php
                                                    $sizeInBytes = $image->size;
                                                    $sizeInKB = round($sizeInBytes / 1024, 2);
                                                    $sizeInMB = round($sizeInKB / 1024, 2);
                                                    $displaySize = $sizeInMB > 1 ? $sizeInMB . 'MB' : $sizeInKB . 'KB';
                                                @endphp
                                                {{ $displaySize }}
                                            </td>
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
                            {!! $images->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
