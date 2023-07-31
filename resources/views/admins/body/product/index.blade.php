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
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ env('WEBSITE_NAME') }}</a>
                                </li>
                                <li class="breadcrumb-item active">Sản phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản lý sản phẩm (Hình ảnh)</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- TODO: upload image product --}}
                        <form id="upload-form" action="{{ route('admin.pages.product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="fileupload btn btn-success waves-effect mb-3">
                                <span><i class="mdi mdi-cloud-upload mr-1"></i> Tải lên hình ảnh</span>
                                <input type="file" name="file" id="file" class="upload">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="font-13 bg-light text-muted">
                                    <tr>
                                        <th class="font-weight-medium">Hình ảnh</th>
                                        <th class="font-weight-medium">Kích cỡ</th>
                                        <th class="font-weight-medium">Ngày</th>
                                        <th class="font-weight-medium text-center" style="width: 125px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets\images\file-icons\pdf.svg" height="30" alt="icon"
                                                class="mr-2">
                                            <a href="javascript:void(0);" class="text-dark">Invoice-project.pdf</a>
                                        </td>
                                        <td>2.31 MB</td>
                                        <td class="text-muted font-13">17-Jan-18 2:55 PM</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-link font-18 text-muted btn-sm">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
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

@push('script')
    <script type="text/javascript">
       $(document).ready(function() {
        $('#file').change(function() {
            var form = $('#upload-form')[0];
            var formData = new FormData(form);
            
            $.ajax({
                type: 'POST',
                url: form.action,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                  
                    console.log('Tải lên thành công');
                    const listProducts = "{{ route('admin.pages.product.index') }}";
                        window.location.href = listProducts;
                },
                error: function(error) {
                    console.log('Lỗi tải lên: ', error);
                }
            });
        });
    });
    </script>
@endpush