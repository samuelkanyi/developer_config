@extends('layouts.app')
@section('content')
<input id="search" type="text" placeholder="Search Tutorial"/>

<section class="main">
    @if(count($tutorials)>0)
        @foreach($tutorials as $tutorial)
            <div class="process">
                <div class="process-image">
                    <img src="{{asset('images/logo.png')}}" alt=""/>
                </div>
                <div class="process-body">
                    <div class="process-title">
                        <h3>{{$tutorial->title}}</h3>
                        <span class="user">Created at {{$tutorial->created_at}}</span>
                    </div>
                    <div class="process-detail">
                        {!! str_limit($tutorial->body, 300, '...')!!}
                        <a href="/tutorial/{{$tutorial->id}}">Read more</a>
                    </div>
                </div>
            </div>
        <hr>
        @endforeach
    @else
        <h2>No Tutorials Found</h2>
    @endif
</section>
@endsection