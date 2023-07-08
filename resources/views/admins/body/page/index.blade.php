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
                                <li class="breadcrumb-item active">Quản lý trang tĩnh</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý trang tĩnh</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-centered m-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên trang tĩnh</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                        <tr>
                                            <td>
                                                <img src="{{ $page->image?->url ? asset('../..' . Storage::url($page->image->url)) : asset('../bootstrapv1/img/about.jpg') }}"
                                                    class="img-thumbnail" alt="profile-image" style="width: 8rem">
                                            </td>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">{{ $page->name }}</h5>
                                            </td>
                                            <td>
                                                {{ $page->title }}
                                            </td>
                                            <td>
                                                @php
                                                    echo $page->description;
                                                @endphp
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.pages.edit', ['page' => $page->uuid]) }}"
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
