<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Digitalpreneur | Welcome - to digital entrepreneur </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('digipenpApp/public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('digipenpApp/public/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('digipenpApp/public/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('digipenpApp/public/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('digipenpApp/public/css/forms/switches.css') }}">
</head>

<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="mt-4">Account Activation !</h1>
                        <p class="signup-link">Comeplete account creation by supply the activation code you
                            already purchased.</p>

                        <form class="text-left" method="POST" action="{{ route('activate') }}">
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

                                <div id="activationCode-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="userId" type="hidden" name="user_id" value="{{ session('userId') }}">
                                    <input id="activationCode" type="text" class="form-control"
                                        placeholder="Activation Code" name="activationCode"
                                        value="{{ old('activationCode') }}">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary">Finish</button>
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
    <script src="{{ asset('digipenpApp/public/jslibs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('digipenpApp/public/bootstrapjs/popper.min.js') }}"></script>
    <script src="{{ asset('digipenpApp/public/bootstrapjs/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('digipenpApp/public/jsauthentication/form-1.js') }}"></script>

</body>

</html>
