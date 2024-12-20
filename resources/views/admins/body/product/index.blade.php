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
            @include('admins.body.notification')

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- TODO: upload image product --}}
                        <form id="upload-form" action="{{ route('admin.pages.product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="fileupload btn btn-success waves-effect mb-3">
                                <span id="spinner" class="spinner-border spinner-border-sm mr-1" role="status"
                                    aria-hidden="true" style="display: none;"></span>
                                <span><i id="icon" class="mdi mdi-cloud-upload mr-1"></i> Tải lên hình ảnh</span>
                                <input type="file" name="file" id="file" class="upload">
                            </div>

                        </form>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="font-13 bg-light text-muted">
                                    <tr>
                                        <th class="font-weight-medium">Hình ảnh</th>
                                        <th class="font-weight-medium">Ngày tạo</th>
                                        <th class="font-weight-medium">Kích cỡ</th>
                                        <th class="font-weight-medium">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('../..' . Storage::url($product->image->url)) }}"
                                                    height="30" alt="{{ $product->image->alt }}" class="mr-2">
                                                <a href="javascript:void(0);" class="text-dark">{{ $product->name }}</a>
                                            </td>
                                            <td class="text-muted font-13">{{ $product->created_at }}</td>
                                            <td>
                                                @php
                                                    $sizeInBytes = $product->image->size;
                                                    $sizeInKB = round($sizeInBytes / 1024, 2);
                                                    $sizeInMB = round($sizeInKB / 1024, 2);
                                                    $displaySize = $sizeInMB > 1 ? $sizeInMB . 'MB' : $sizeInKB . 'KB';
                                                @endphp
                                                {{ $displaySize }}
                                            </td>

                                            <td>
                                                <button
                                                    class="btn btn-xs btn-secondary btn-delete ml-2 d-flex d-flex justify-content-center"
                                                    data-product-id="{{ $product->uuid }}">
                                                    <i class="mdi mdi-delete"></i></button>
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

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#file').change(function() {
                var form = $('#upload-form')[0];
                var formData = new FormData(form);

                var uploadButton = document.querySelector(".fileupload");
                uploadButton.setAttribute("disabled", "");

                var spinner = document.querySelector("#spinner");
                spinner.style.display = "inline-block";

                var icon = document.querySelector("#icon");
                icon.style.display = "none"

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
                        const listProducts = "{{ route('admin.pages.product.index') }}";
                        window.location.href = listProducts;
                    },
                    error: function(error) {
                        console.log('Lỗi tải lên: ', error);
                    },
                    complete: function() {
                        uploadButton.removeAttribute("disabled");
                        spinner.style.display = "none";
                        icon.style.display = "inline-block"
                    }
                });
            });
            $('.btn-delete').click(function() {

                var button = $(this);
                var productId = button.data('product-id');

                $.ajax({
                    url: "{{ route('admin.pages.product.destroy', ':product_id') }}".replace(
                        ':product_id', productId),
                    type: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'product_id': productId
                    },
                    success: function(response) {
                        button.closest('tr').remove();
                    },
                    error: function(error) {
                        console.log('Lỗi xóa sản phẩm: ', error);
                    }
                });
            });
        });
    </script>
@endpush
