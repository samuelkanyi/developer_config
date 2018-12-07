@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="invalid-feedback" role="alert">
    {{ session('status') }}
</div>
@endif
<h1>DASHBOARD</h1>
<p>upload profile picture</p>
{{Form::open(['action', 'ImageController@store', 'enctype'=>'multipart/data'])}}
{{Form::file('avatar')}}
{{Form::close()}}


@endsection
