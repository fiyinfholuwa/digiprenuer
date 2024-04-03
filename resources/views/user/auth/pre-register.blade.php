<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 04:40:19 GMT -->

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

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/forms/switches.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/scrollspyNav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-step/jquery.steps.css') }}">

    <!--  END CUSTOM STYLE FILE  -->

    <style>
        #formValidate .wizard>.content {
            min-height: 25em;
        }

        #example-vertical.wizard>.content {
            min-height: 24.5em;
        }
    </style>

</head>

<body class="form" data-spy="scroll" data-target="#navSection" data-offset="100">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <div class="brand-logo">
                            <img src="{{ asset('digipenpApp/public/img/logo.png') }}" alt="" class="responsive-img w-75 mt-5 p-2">
                        </div>
                        <h1 class="mt-4">Creat An Account</h1>
                        <p class="signup-link">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        <form class="text-left" method="POST" action="{{ route('pregister') }}">
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
                                <div id="fullname-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="fullname" name="fullname" type="text" class="form-control"
                                        placeholder="Fullname" value="{{ old('fullname') }}" required>

                                    @error('fullname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div id="email-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-at-sign">
                                                <circle cx="12" cy="12" r="4"></circle>
                                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                            </svg>
                                            <input id="email" type="text" placeholder="Email" name="email"
                                                value="{{ old('email') }}" required>

                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div id="username-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <input id="username" type="text" class="form-control"
                                                placeholder="Username" name="username" value="{{ old('username') }}"
                                                required>

                                            @error('username')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div id="password-field" class="field-wrapper input mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input id="password" name="password" type="password"
                                                placeholder="Password" required>
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="password-field" class="field-wrapper input mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input id="password" name="password_confirmation" type="password"
                                                placeholder="Confirm Password" required>

                                        </div>
                                    </div>
                                </div>


                                <div id="gender-field" class="field-wrapper input">
                                    <div class="n-chk">
                                        <div class="form-row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                Gender : &nbsp; &nbsp;
                                                <label
                                                    class="new-control new-checkbox new-checkbox-rounded checkbox-outline-success">
                                                    <input type="radio" class="new-control-input" name="gender"
                                                        value="male">
                                                    <span class="new-control-indicator"></span>Male
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label
                                                    class="new-control new-checkbox new-checkbox-rounded checkbox-outline-success">
                                                    <input type="radio" class="new-control-input" name="gender"
                                                        value="female">
                                                    <span class="new-control-indicator"></span>Female
                                                </label>
                                            </div>
                                        </div>

                                        @error('gender')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div id="age-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input type="number" min="18" placeholder="age" name="age"
                                                value="{{ old('age') }}" required>

                                            @error('age')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div id="Profession-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input id="Profession" type="text" placeholder="Profession"
                                                name="profession" value="{{ old('profession') }}" required>

                                            @error('profession')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div id="Country-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input id="Country" name="country" type="text"
                                                value="{{ old('country') }}" placeholder="Country of Residence"
                                                required>
                                            @error('country')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div id="state-field" class="field-wrapper input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <input id="state" name="state" type="text"
                                                value="{{ old('state') }}" placeholder="State of Residence"
                                                required>
                                            @error('state')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div id="referral-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>

                                    <input id="referral" type="text" class="form-control" name="referral"
                                       value="@if($referral) {{ $referral }} @endif" placeholder="Referral Code (Optional)"
                                       @if($referral) readonly @endif>


                                    @error('referral')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input" required>
                                            <span class="new-control-indicator"></span><span>I agree to the <a
                                                    href="javascript:void(0);"> terms and conditions </a></span>
                                        </label>
                                    </div>
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
                                        <button type="submit" class="btn btn-primary">Get
                                            Started!</button>
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
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/authentication/form-1.js') }}"></script>

    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/jquery-step/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-step/custom-jquery.steps.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>
