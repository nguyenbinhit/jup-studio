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
                            <li class="breadcrumb-item active">Quản lý tài khoản</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Quản lý tài khoản người dùng</h4>
                </div>
            </div>
        </div>

        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="inputPassword2" class="sr-only">Tìm kiếm</label>
                                    <input type="text" class="form-control" id="search" name="s"
                                        placeholder="Tìm kiếm thành viên...">
                                </div>
                            </form>
                        </div>
                    @if ( auth()->user()->email === 'administrator@gmail.com' )
                        <div class="col-lg-4">
                            <div class="text-lg-right mt-3 mt-lg-0">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-danger waves-effect"
                                    data-animation="fadein" data-overlaycolor="#38414a"><i
                                        class="mdi mdi-plus-circle mr-1"></i> Thêm mới</a>
                            </div>
                        </div><!-- end col-->
                    @endif
                    </div> <!-- end row -->
                </div> <!-- end card-box -->
            </div><!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="font-13 bg-light text-muted">
                                <tr>
                                    <th class="font-weight-medium">Tên </th>
                                    <th class="font-weight-medium">Email</th>
                                    <th class="font-weight-medium">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="text-muted font-13">
                                        <a href="{{ route('admin.users.show', ['user' => $user->uuid]) }}"
                                            class="text-dark">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td class="text-muted font-13">{{ $user->email }}</td>
                                    <td class="text-muted font-13">{{ $user->created_at }}</td>
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
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- content -->
@endsection
