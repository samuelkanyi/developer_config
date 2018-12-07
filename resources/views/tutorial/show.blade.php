@extends('layouts.app')

@section('content')
<a class="btn" href="/tutorial">Go Back</a>
<h1>{{$tutorial->title}}</h1>
<span>Tutorial created at {{$tutorial->created_at}}</span>
<hr>
<article>{!! $tutorial->body !!}</article>
@endsection