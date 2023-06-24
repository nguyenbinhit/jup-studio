@extends('admins.login.layout')
@section('content-login')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="{{ asset('../bootstrapv1/img/logo.jpg') }}" alt="Jup Studio"
                                        height="100"></span>
                            </a>
                            <h3 class="text-muted mb-4 mt-3">Dashboard JUP Studio</h3>
                        </div>

                        @if (Session::has('error'))
                            <div class="alert alert-danger text-center">
                                <strong>{{ Session::get('error') }}</strong>
                            </div>
                        @endif

                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control {{ $errors->has('email') ? 'mb-1' : '' }}" type="email"
                                    id="emailaddress" name="email" required="" placeholder="Enter your email">
                                @if ($errors->has('email'))
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control {{ $errors->has('email') ? 'mb-1' : '' }}" type="password"
                                    id="password" name="password" required="" placeholder="Enter your password">
                                @if ($errors->has('password'))
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                @endif
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                                <a class="small text-end card-link" href="pages-recoverpw.html">Forgot your
                                    password?</a>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
@endsection
