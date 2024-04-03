<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login | Welcom to Digitalpreneur </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/forms/switches.css') }}">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <div class="brand-logo">
                            <img src="{{ asset('/img/logo.png') }}" alt="" class="responsive-img w-75 mt-5 p-2">
                        </div>
                        <h1 class="">Log In </a>
                        </h1>
                        <p class="signup-link">New Here? <a href="{{ route('pre_register') }}">Create an account</a></p>

                        <form class="text-left" method="POST" action="{{ route('login') }}">
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
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" class="form-control"
                                        placeholder="Username/Email">
                                    @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                        </rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>
                                <?//=password_hash('password', PASSWORD_DEFAULT)?>

                                <div class="d-sm-flex justify-content-between mt-4">
                                    <div class="field-wrapper toggle-pass">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <a href="auth_pass_recovery.html" class="forgot-pass-link">Forgot
                                            Password?</a>
                                    </div>
                                </div>



                            </div>
                        </form>
                        <p class="terms-conditions">Copyright © 2024 All Rights Reserved. </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image p-5 text-center">
                <!--<img src="{{ asset('digipenpApp/public/img/favicon.png') }}" alt=""-->
                <!--    class="responsive-img w-75 mt-2 p-5 pr-4 ml-4">-->
                <!--<h2 class="text-white">DIGITALPRENEUR</h2>-->
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/authentication/form-1.js') }}"></script>

</body>

</html>
