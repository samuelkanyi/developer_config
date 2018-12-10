@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="invalid-feedback" role="alert">
    {{ session('status') }}
</div>
@endif
<h1>DASHBOARD</h1>
<section class="dashboard">
    @if(count($tutorials)>0)
    <table class="table">
        <thead>
            <tr>
                <th>Tutorial</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tutorials as $tutorial)
            <tr>
                <td>{{$tutorial->title}}</td>
                <td>{{$tutorial->created_at}}</td>
                <td class="action-buttons">
                    <a href="/tutorial/{{$tutorial->id}}/edit" class="btn btn-anchor btn-outline edit">EDIT</a>
                    <a class="btn btn-anchor btn-outline delete anchor-delete">DELETE</a>
                </td>
            </tr>
        <div class="modal">
            <div class="modal-content">
                <span class="close-button btn-cancel">&times;</span>
                <p>Are you sure you want to delete {{$tutorial->title}}</p>
                <p style="font-style: italic">This change is irreversible</p>
                {{Form::open(['action' => ['TutorialController@destroy', $tutorial->id], 'method'=>'POST'])}}
                {{Form::submit('Yes, I Understand the consequences', ['class' => 'btn btn-danger'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::close() }}
                <a class="btn btn-anchor btn-outline btn-cancel">No, Go back</a>
            </div>
        </div>
        @endforeach
        </tbody>
    </table>
    @else
    <div class="table">
        <p>You Have not create any tutorials</p><br>
        <a class="btn" href="/tutorial/create">Create tutorial</a>
    </div>
    @endif
    <aside>
        <div class="avatar">
            @if(auth()->user()->avatar == "noimage.jpg")
            <img src="{{asset('storage/no-image.png')}}" alt="no-image">
            {{ Form::open(['route' => 'profile', 'files' => true]) }}
            {{Form::label('profile_image', 'profile image', ['class' => 'form-label'])}}
            {{Form::file('profile_image')}}
            {{Form::submit('Upload', ['class'=>'btn '])}}
            {{Form::close()}}
            @else
            <?php $image = auth()->user()->avatar ?>
            <img src='{{asset("storage/$image")}}' alt="{{auth()->user()->avatar}}">
            @endif
        </div>
        {{ Form::open(['route' => 'profile', 'files' => true, 'class'=>'change-profile']) }}
        {{Form::label('profile_image', 'profile image', ['class' => 'form-label'])}}
        {{Form::file('profile_image')}}
        {{Form::submit('Change profile', ['class'=>'btn'])}}
        {{Form::close()}}
        <p class="format-text">{{auth()->user()->name}}</p>
        <p  class="format-text">{{auth()->user()->email}}</p>
        <p>{{auth()->user()->position}}</p>
        
        <button class="btn prof_change">Change profile</button>

    </aside>
</section>
@endsection
