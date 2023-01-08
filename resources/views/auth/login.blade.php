{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <p>Login With:</p>
                                <a href="{{ url('login/facebook') }}" class="btn btn-success">Facebook</a>
                                <a href="{{ url('login/google') }}" class="btn btn-success">Google</a>
                                <a href="{{ url('login/github') }}" class="btn btn-success">Github</a>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



 {{-- @extends('layouts.app')  --}}
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BibliotecA digitAL </title>
</head>
<body>
    <div class="contaner-login">
        <div class="img-box">
            <img src="auth.jpg">
        </div>
        <div class="content-box">
            <div class="form-box">
                    <h2>Seja bem-vindo</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-box">
                            <span>E-mail</span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span>Palavra-passe</span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="remember">
                            <label>
                                
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Manter-me autenticado ') }}
                                </label>
                            </label>
                            <a href="#"></a> 
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="position: absolute;
                                    width: 185px;height: 18px;left: 1150px; top: 329px; font-weight: 700;font-size: 13px;line-height: 18px;" >
                                        {{ __('Recuperar Palavra-passe') }}
                                    </a>
                                @endif
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Entrar">
                        </div>
                        
                    </form>
                    <h3 style="text-align: center;  left: 941px; ">   ou </h3>
                    <ul class="ul">
                        <li><img src="google.png" ><a href="{{ url('login/google') }}" style="position: absolute; width: 289px; height: 18px;
                        left: 1000px; top: 510px; text-decoration: none; font-style: normal; font-weight: 700;
                            font-size: 15px; line-height: 18px; color: dimgray;"> Autenticar-se com conta da Google </a></li>
                        <li><img   src="facebook.png"><a  href="{{ url('login/facebook') }}" style="position: absolute; width: 289px; height: 18px;
                            left: 1000px; top: 570px; text-decoration: none; font-style: normal; font-weight: 700;
                                font-size: 15px; line-height: 18px; color: dimgray;"> Autenticar-se com conta do Facebook </a></li>
                    </ul>
                    <div class="input-box"  style="position: absolute; width: 289px; height: 18px;
                    left: 1000px; top: 610px; text-decoration: none; font-style: normal; 
                        font-size: 15px; line-height: 18px; color: dimgray;">
                        <p>Nao tens conta?  @if (Route::has('register'))
                               
                            <a  href="{{ route('register') }}">{{ __('Pode cadastrate!') }}</a>
                    @endif</p>
            </div>
            
        </div>
    </div>
    
</body>
</html>

