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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item active">Thêm mới bảng giá</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thêm mới bảng giá</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <ul class="nav nav-pills navtab-bg">
                        <li class="nav-item">
                            <a href="#" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="mdi mdi-settings-outline mr-1"></i>Thêm mới
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="settings">
                            <form method="POST" action="{{ route('admin.plan.store')" class="needs-validation" novalidate="" enctype="multipart/form-data">  @csrf
                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i>
                                    Thông tin bảng giá</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="nameprice">Tên bảng giá</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Tên bảng giá" value="" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập tên bảng giá!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">Giá</label>
                                            <input type="number" class="form-control" id="validationCustom02"
                                                placeholder="Giá" value="" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập số lượng giá!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="validationCustom01">Miêu tả</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <h5 class="mb-3 text-uppercase bg-light p-2 mt-3"><i
                                        class="mdi mdi-account-circle mr-1"></i>
                                    Lợi ích</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">Một</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" value="">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">Hai</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" value="">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">Ba</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" value="">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="validationCustom02">Bốn</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" value="">

                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Lưu</button>
                                    </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div> <!-- end card-box-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->
@endsection