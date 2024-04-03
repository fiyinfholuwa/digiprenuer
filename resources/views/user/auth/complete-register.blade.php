<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forms/switches.css') }}">
</head>

<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="mt-4">Bank Account Information </h1>
                        <p class="signup-link">Submit account information to complete registration.</p>
                        <form class="text-left" method="POST" action="{{ route('cregister') }}">
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

                                <div id="accountNumber-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="userId" type="hidden" name="user_id"
                                        value="{{ session('userId') }}">
                                    <input id="accountNumber" name="accountNumber" value="{{ old('accountNumber') }}"
                                        type="text" class="form-control" placeholder="Account Number">

                                    @error('accountNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div id="accountName-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                    <input id="accountName" type="text" placeholder="Account Name" name="accountName"
                                        value="{{ old('accountName') }}">
                                    @error('accountName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div id="bankName-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                        </rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="bankName" type="text" placeholder="Bank Name" name="bankName"
                                        value="{{ old('bankName') }}">
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Continue</button>
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
                <!--<img src="{{ asset('img/favicon.png') }}" alt=""-->
                <!--    class="responsive-img w-75 mt-2 p-5 pr-4 ml-4">-->
                <!--<h2 class="text-white">DIGITALPRENEUR</h2>-->
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/authentication/form-1.js') }}"></script>

</body>

</html>
