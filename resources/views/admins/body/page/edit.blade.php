@extends('admins.index')
@section('content')
    <div class="content">
        <div class="container-fluid" style="position: relative;">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('WEBSITE_NAME') }}</a></li>
                                <li class="breadcrumb-item">Quản lý trang tĩnh</li>
                                <li class="breadcrumb-item active">Cập nhật</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cập nhật trang tĩnh</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="header-title">{{ $page->name }}</h3>
                            <br />

                            <form action="{{ route('admin.pages.update', ['page' => $page->uuid]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Tên trang tĩnh</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $page->name }}" style="background-color: #e9ecef" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $page->title }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Hình ảnh</label>
                                    <input type="file" class="form-control" name="file" id="file"
                                        value="{{ $page->image?->url }}" style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                    @if ($errors->has('file'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('file') }}
                                        </div>
                                    @endif
                                    @if ($page->image && $page->image->url)
                                        <img src="{{ asset('../..' . Storage::url($page->image->url)) }}" alt=""
                                            style="width: 10rem; height: auto;" class="mt-1 img-thumbnail">
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Nội dung</label>
                                    <textarea class="form-control" id="summernote-editor" name="description" rows="4"
                                        placeholder="Nội duung trang tĩnh...">{{ $page->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            </div>
        </div>
    </div>
@endsection
