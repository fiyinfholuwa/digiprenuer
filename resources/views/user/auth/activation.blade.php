<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digipenp :| Welcome to digipenp money making solution</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                {{-- <img src="{{ asset('images/logo-dark.svg') }}" alt="logo"> --}}
                            </div>
                            <h4>Account Activation !</h4>
                            <h6 class="font-weight-light">Comeplete account creation by supply the action code you
                                already purchased.</h6>
                            <form class="pt-3" method="POST" action="{{ route('activate') }}">
                                @csrf

                                <div id="error_result">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show text-dark"
                                            role="alert">
                                            <strong>Success!</strong> {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger text-danger alert-dismissible fade show"
                                            role="alert">
                                            <strong>Oh Oops!</strong> {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label>Activation Code {{ session('userId') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="hidden" class="form-control form-control-lg border-left-0"
                                            name="user_id" value="{{ session('userId') }}">
                                        <input type="text" class="form-control form-control-lg border-left-0"
                                            placeholder="Activation Code" name="activationCode"
                                            value="{{ old('activationCode') }}">
                                    </div>
                                    @error('activationCode')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Activate
                                        Account </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
                            2020 All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
</body>

</html>
