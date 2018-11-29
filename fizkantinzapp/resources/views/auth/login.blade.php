<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fizkantinz</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">   
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> 

    <!-- ICON -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.4.2-web/css/all.css') }}">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="main-header text-align-center">
                    <p class="h1"><i class="fas fa-cookie-bite"></i> FIZKANTINZ</p>
                </div>
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                          <div class="form-row align-items-center">
                            <div class="header">
                                <i class="fas fa-user header-icon"></i>
                                <p class="h4 header-text"><b>SIGN IN</b></p>
                            </div>
                            <div class="col-12">
                              <label class="sr-only" for="inlineFormInputGroup">E-mail</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inlineFormInputGroup" placeholder="E-mail" value="{{ old('email') }}" required name="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="col-12">
                              <label class="sr-only" for="inlineFormInputGroup">Password</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                </div>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inlineFormInputGroup" placeholder="Password" value="{{ old('password') }}" required name="password">
                              </div>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary col-12">Masuk</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="footer-copyright text-align-center">
                    <p>Copyright © 2018 Fizkantinz, SMK Negeri 10 Jakarta</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>