@extends('layouts.app')

@section('content')
<div class="card">
    <section class="card-section">
        <h3>{{__('Login')}}</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" class="card-inputs{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Email">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <input id="password" type="password" class="card-inputs{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label for="remember">
                {{ __('Remember Me') }}
            </label>

            <button type="submit" class="btn">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <a class="" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </form>
    </section>
</div>
@endsection
