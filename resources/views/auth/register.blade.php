@extends('layouts.app')

@section('content')
<img class="img-center" src="https://ecompjr.com.br/images/logomarca.png" alt="">
<div class="row mar20" >
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="inner-section">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mar20 inside-form">
                    <h2 class="font_white text-center">Sign In</h2>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                        
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-flag " aria-hidden="true"></i></span>
                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Senha">
                        
                    </div>

                    <div class="footer text-center">
                        <button type="submit" class="btn btn-neutral btn-round btn-lg">
                            Registrar
                        </button>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
