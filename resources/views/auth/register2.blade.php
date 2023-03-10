<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('layout/css')
</head>

<body>
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>CRUD</h3>
                            </a>
                            <h3>{{ __('Register') }}</h3>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="name">{{ __('Name') }}</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="name@example.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="email">{{ __('Email Address') }}</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name ="password"
                                required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password" placeholder="Password">

                                <label for="password-confirm"> {{ __('Confirm Password') }}</label>
                            </div>

                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">{{ __('Register') }}</button>
                            <p class="text-center mb-0">Sudah Punya Akun? <a href="/">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    @include('layout/js')
</body>

</html>