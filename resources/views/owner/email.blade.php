<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-7">
                    <div class="card1">
                        <div class="row">
                            <img src="img/logo.png" alt="logo" class="logo">
                        </div>
                        <div class="row px-5 justify-content-center border-line">
                            <img src="img/forgot.png" alt="image" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="card2 card border-0 py-5">
                            <h3>Reset Your Password</h3>
                            <div class="row px-3">
                                <label class="mb-2">
                                    <h6 class="mb-2 text-sm">Email Address</h6>
                                </label>
                                <input type="email" id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>    
                                @enderror
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                </div>
                                @endif 
                            </div>
                            <div class="row mb-5 px-5">
                                <button type="submit" class="btn btn-blue text-center" style="border-radius: 15px">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="vh-100" style="background-color: #CA9BA9;" >
        <div class="container py-50 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10" >
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0" >
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/forgot.png"
                                alt="login form" class="img-fluid" style="align-items: center"  />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                    
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <img src="img/lily_ann__3_-removebg-preview.png" alt="" style="width: 250px; text-align:center; justify-content: center; align-items:center;">
                                        </div>
                    
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reset Your Password</h5>
                                        <label class="email" for="email">Email address</label>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                            @error('email')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>    
                                            @enderror
                                        </div>
                    
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</body>
</html>

<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #EDDEE2;
        background-repeat: no-repeat;
    }
    .card1 .image {
        width: 70%; 
        height: auto;
    }

    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 15px;
    }

    .card2 {
        margin: 70px 40px;
        border-radius: 15px;
    }

    .card2 h3{
        font-family: "Lilita One", sans-serif;
        margin-bottom: 50px;
        margin-left: 20%;
    }

    .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px;
    }

    .image {
        width: 360px;
        height: 280px;
    }

    .border-line {
        border-right: 1px solid #EEEEEE;
    }

    .or {
        width: 10%;
        font-weight: bold;
    }

    .text-sm {
        font-size: 14px !important;
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input, textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px;
    }

    input:focus, textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #944E63;
        outline-width: 0;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    a {
        color: inherit;
        cursor: pointer;
    }

    .btn-blue {
        background-color: #643543;
        width: 250px;
        color: #fff;
        border-radius: 2px;
        margin-top: 30px;
        margin-left: -30px;
    }

    .btn-blue:hover {
        background-color: #DCBCC6;
        cursor: pointer;
    }

    .bg-blue {
        color: #fff;
        background-color: #944E63;
    }

    @media screen and (max-width: 991px) {
        .logo {
            margin-left: 0px;
        }

        .image {
            width: 300px;
            height: 220px;
        }

        .border-line {
            border-right: none;
        }

        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px;
        }
    }
</style>

