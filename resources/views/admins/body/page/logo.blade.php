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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">JupStudio</a></li>
                                <li class="breadcrumb-item active">Logo</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Logo</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('admins.body.notification')

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center ribbon-box">
                        <img src="{{ $page->image?->url ? asset('../..' . Storage::url($page->image->url)) : asset('../bootstrap-admin/images/users/avatar-1.jpg') }}"
                            class="avatar-xxl" alt="profile-image" style="width: 12rem; height: auto;">

                        <div class="text-left mt-3">
                            <h4 class="font-13 text-uppercase">Thông tin file Logo:</h4>
                            <p class="text-muted mb-2 font-13"><strong>Tên file :</strong> <span
                                    class="ml-2">{{ $page->name }}</span></p>
                            @php
                                $sizeInBytes = $page->image?->size;
                                $sizeInKB = round($sizeInBytes / 1024, 2);
                                $sizeInMB = round($sizeInKB / 1024, 2);
                                $displaySize = $sizeInMB > 1 ? $sizeInMB . 'MB' : $sizeInKB . 'KB';
                            @endphp
                            <p class="text-muted mb-2 font-13"><strong>Size :</strong> <span
                                    class="ml-2 ">{{ $displaySize }}</span></p>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Ngày tạo :</strong> <span
                                    class="ml-2 ">{{ $page->created_at }}</span></p>
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
                            <li class="nav-item">
                                <a href="#" class="nav-link btn-success" data-animation="fadein"
                                    data-overlaycolor="#38414a"><i class="mdi mdi-eye mr-1"></i>
                                    Xem trước</a>
                            </li>
                        </ul>
                        <!-- end card-->

                        <div class="card-body">
                            <h4 class="header-title m-t-0 mb-1">Tải lên file Logo</h4>
                            <form action="{{ route('admin.pages.logo.update', ['page' => 'logo']) }}" method="POST"
                                class="dropzone" id="myAwesomeDropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="fallback">
                                    <input name="file" type="file" id="file">
                                </div>

                                <div class="dz-message needsclick">
                                    <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                    <h3>Kéo thả file logo ở đây hoặc bấm vào để tải lên.</h3>
                                </div>
                            </form>

                            <div class="text-lg-right mt-1">
                                <button id="uploadFile" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i>
                                    Lưu</button>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                    <!-- end row -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
@endsection
@push('script')
    <script src="{{ asset('../bootstrap-admin/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('../bootstrap-admin/js/pages/form-fileuploads.init.js') }}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var errors = false;

        var myDropzone = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.webp",
            init: function() {
                this.on('success', function(file, resp) {
                    return window.location.href =
                        "{{ route('admin.pages.logo.show', ['page' => 'logo']) }}";
                });
            },
        });

        $('#uploadFile').click(function() {
            myDropzone.processQueue();
        });
    </script>
@endpush
