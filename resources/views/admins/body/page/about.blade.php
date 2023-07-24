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
                                <li class="breadcrumb-item">Quản lý trang giới thiệu</li>
                                <li class="breadcrumb-item active">Cập nhật</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cập nhật trang giới thiệu</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box text-center ribbon-box">

                            <div class="clearfix"></div>
                            <img src="{{ $page->image?->url ? asset('../..' . Storage::url($page->image->url)) : asset('../bootstrap-admin/images/users/avatar-1.jpg') }}"
                                class="avatar-xxl" alt="profile-image" style="width: 12rem; height: auto;">

                            <div class="text-left mt-3">
                                <h4 class="font-13 text-uppercase">Thông tin trang giới thiệu:</h4>
                                <p class="text-muted mb-2 font-13"><strong>Tên trang :</strong> <span
                                        class="ml-2"></span>{{ $page->name }}</p>

                                <p class="text-muted mb-2 font-13"><strong>Tiêu đề :</strong>{{ $page->title }}<span
                                        class="ml-2 "></span></p>
                                </p>
                                <p class="text-muted font-13 mb-3">
                                    <strong>Nội dung :</strong>
                                    <?php echo $page->description; ?>
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

                            <div class="tab-content">
                                <div class="tab-pane show active" id="settings">
                                    <form method="POST"
                                        action="{{ route('admin.pages.about.update', ['page' => 'gioi-thieu']) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i
                                                class="mdi mdi-account-circle mr-1"></i>
                                            Thông tin trang giới thiệu</h5>

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
                                                value="{{ $page->image?->url }}"
                                                style="padding: 0.25rem 0.9rem 0.45rem 0.2rem">
                                            @if ($errors->has('file'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('file') }}
                                                </div>
                                            @endif
                                            @if ($page->image && $page->image->url)
                                                <img src="{{ asset('../..' . Storage::url($page->image->url)) }}"
                                                    alt="" style="width: 10rem; height: auto;"
                                                    class="mt-1 img-thumbnail">
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

                                        <button type="submit" class="btn btn-success mt-2"><i
                                                class="mdi mdi-content-save"></i>
                                            Lưu</button>

                                    </form>
                                </div>
                                <!-- end settings content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
