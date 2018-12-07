@extends('layouts.app')

@section('content')
<div class="card">
    <section class="card-section">
        <h3>{{ __('Register') }}</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            
            <label for="position">Position</label>
            <input id="position" name="position" type="text" placeholder="Title in the company eg Javascript programmer" required>
            
            <label for="skill">Skill</label>
            <input id="skill" name="skill" type="text" placeholder="What You are good at. Eg Frontend developer" required>
            
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </form>
    </section>
</div>
@endsection
