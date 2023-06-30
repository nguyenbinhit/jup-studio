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
                                <li class="breadcrumb-item active">Thành viên studio</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Xin chào {{ auth()->user()->name }} !</h4>
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
                                            placeholder="Tìm kiếm...">
                                    </div>
                                    <div class="form-group mx-sm-3">
                                        <label for="status-select" class="mr-2">Sắp xếp theo</label>
                                        <select class="custom-select" id="status-select">
                                            <option selected="">Tất cả</option>
                                            <option value="name">Theo tên</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="{{ route('admin.employees.create') }}" class="btn btn-danger waves-effect"
                                        data-animation="fadein" data-overlaycolor="#38414a"><i
                                            class="mdi mdi-plus-circle mr-1"></i> Thêm mới</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div><!-- end col-->
            </div>
            <!-- end row -->

            <div class="row" id="row-list-employees">
                @foreach ($employees as $employee)
                    <div class="col-lg-4" id="list-employees">
                        <div class="text-center card-box ribbon-box">
                            @if ($employee->status === 'publish')
                                <div class="ribbon-two ribbon-two-primary"><span>Công bố</span></div>
                            @else
                                <div class="ribbon-two ribbon-two-danger"><span>Ẩn công bố</span></div>
                            @endif
                            <div class="clearfix"></div>
                            <div class="pt-2 pb-2">
                                <img src="{{ $employee->image?->url ? asset('../..' . Storage::url($employee->image->url)) : asset('../bootstrap-admin/images/users/avatar-9.jpg') }}"
                                    class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                {{-- TODO: profile url --}}
                                <h4 class="mt-3 font-17"><a
                                        href="{{ route('admin.employees.show', ['employee' => $employee->uuid]) }}"
                                        class="text-dark">{{ $employee->name }}</a></h4>
                                <p class="text-muted">{{ $employee->position }} <span> | </span> <span> <a href="#"
                                            class="text-pink">{{ $employee->email }}</a> </span></p>

                                <p class="text-muted font-13 mb-3">
                                    {{ $employee->description }}
                                </p>

                                <ul class="social-list list-inline mt-3 mb-0">
                                    @foreach ($employee->socials as $key => $value)
                                        @if ($key === 'google' && $employee->socials['google'])
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-danger text-danger"><i
                                                        class="mdi mdi-google"></i></a>
                                            </li>
                                        @endif
                                        @if ($key === 'facebook' && $employee->socials['facebook'])
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-purple text-purple"><i
                                                        class="mdi mdi-facebook"></i></a>
                                            </li>
                                        @endif
                                        @if ($key === 'twitter' && $employee->socials['twitter'])
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-info text-info"><i
                                                        class="mdi mdi-twitter"></i></a>
                                            </li>
                                        @endif
                                        @if ($key === 'github' && $employee->socials['github'])
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item border-secondary text-secondary"><i
                                                        class="mdi mdi-github-circle"></i></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                            </div> <!-- end .padding -->
                        </div> <!-- end card-box-->
                    </div>
                @endforeach
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="text-right">
                        <div class="d-flex justify-content-end">
                            {!! $employees->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('admin.employees.search') }}",
                    method: "GET",
                    data: {
                        s: query
                    },
                    dataType: 'json',
                    success: function(employees) {
                        // Clear the existing employee list
                        $('#list-employees').remove();

                        $.each(employees.data, function(index, employee) {
                            console.log(employee)
                            var imagePath = employee.image && employee.image.url ?
                                `{{ asset('../..' . Storage::url('${employee.image.url}')) }}` :
                                "{{ asset('../../bootstrap-admin/images/users/avatar-9.jpg') }}";


                            var employeeHtml = `
                                <div class="col-lg-4" id="list-employees">
                                    <div class="text-center card-box ribbon-box">
                                        ${
                                            employee.status === 'publish' ?
                                            '<div class="ribbon-two ribbon-two-primary"><span>Công bố</span></div>' :
                                            '<div class="ribbon-two ribbon-two-danger"><span>Ẩn công bố</span></div>'
                                        }
                                        <div class="clearfix"></div>
                                        <div class="pt-2 pb-2">
                                            <img src="${imagePath}"
                                                class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                                <h4 class="mt-3 font-17"><a
                                                    class="text-dark">${employee.name}</a></h4>

                                                <p class="text-muted">${employee.position}<span> | </span> <span> <a href="#"
                                                    class="text-pink">${employee.email}</a> </span></p>

                                                <p class="text-muted font-13 mb-3">
                                                    ${employee.description}
                                                </p>

                                                <ul class="social-list list-inline mt-3 mb-0">
                                                    ${
                                                        employee.socials && employee.socials.google ?
                                                        '<li class="list-inline-item"><a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a></li>' :
                                                        ''
                                                    }
                                                    ${
                                                        employee.socials && employee.socials.facebook ?
                                                        '<li class="list-inline-item"><a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-facebook"></i></a></li>' :
                                                        ''
                                                    }
                                                    ${
                                                        employee.socials && employee.socials.twitter ?
                                                        '<li class="list-inline-item"><a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-twitter"></i></a></li>' :
                                                        ''
                                                    }
                                                    ${
                                                        employee.socials && employee.socials.github ?
                                                        '<li class="list-inline-item"><a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-github"></i></a></li>' :
                                                        ''
                                                    }
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            `;

                            $('#row-list-employees').html(employeeHtml);
                        });
                    }
                });
            }

            $(document).on('keyup', '#search', function() {
                var query = $(this).val();

                fetch_customer_data(query);
            });
        });
    </script>
@endpush
