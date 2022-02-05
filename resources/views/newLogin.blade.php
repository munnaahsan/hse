<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 09:39:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: HSE Login ::</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file   -->
    <link rel="stylesheet" href="{{ asset('/customAuth/css/ebazar.style.min.css') }}">
</head>
<body>
<div id="ebazar-layout" class="theme-blue">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">

        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="{{ asset('/customAuth/images/login-img.svg') }}" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}" class="user row g-1 p-3 p-md-4">
                                @csrf
                            {{-- <form class="row g-1 p-3 p-md-4"> --}}
                                <div class="col-12 text-center mb-5">
                                    <h1>Sign in</h1>
                                    <span>Free access to our dashboard.</span>
                                </div>
{{--                                <div class="col-12 text-center mb-4">--}}
{{--                                    <a class="btn btn-lg btn-light btn-block" href="#">--}}
{{--                                            <span class="d-flex justify-content-center align-items-center">--}}
{{--                                                <img class="avatar xs me-2" src="{{ asset('/customAuth/images/google.svg') }}" alt="Image Description">--}}
{{--                                                Sign in with Google--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <span class="dividers text-muted mt-4">OR</span>--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email</label>
                                        {{-- <input type="email" class="form-control form-control-lg" placeholder="name@example.com"> --}}

                                        <input 
                                            id="email" 
                                            type="email" 
                                            class="form-control form-control-user form-control-lg @error('email') is-invalid @enderror" 
                                            name="email" 
                                            value="{{ old('email') }}" 
                                            required 
                                            autocomplete="email" 
                                            autofocus
                                            placeholder="name@example.com">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-secondary" href="{{ route('password.request') }}">Forgot Password?</a>
                                                </span>
                                        </div>
                                        {{-- <input type="password" class="form-control form-control-lg" placeholder="***************"> --}}
                                        <input 
                                            id="password" 
                                            type="password" 
                                            class="form-control form-control-user form-control-lg @error('password') is-invalid @enderror" 
                                            name="password" 
                                            required 
                                            autocomplete="current-password"
                                            placeholder="***************">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        {{-- <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> --}}
                                        <input 
                                            class="form-check-input custom-control-input" 
                                            type="checkbox" 
                                            name="remember" 
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    {{-- <a href="index.html" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SIGN IN</a> --}}
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->

                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>

</div>

<!-- Jquery Core Js -->
<script src="{{ asset('/customAuth/bundles/libscripts.bundle.js') }}"></script>
</body>
</html>
