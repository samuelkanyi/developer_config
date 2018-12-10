@extends('layouts.app')
@section('content')
<section>
    {!! Form::open(['action' => ['TutorialController@update', $tutorial->id], 'files' => true]) !!}
    {{Form::label('title', 'Tutorial title', ['class' => 'form-label'])}}
    {{Form::text ('title', "$tutorial->title")}}

    {{Form::label('article-ckeditor', 'The Body', ['class' => 'form-label'])}}
    {{Form::textarea('article-ckeditor', "$tutorial->body", ['name'=>'body'])}}

    {{Form::label('cover-image', 'cover image', ['class' => 'form-label'])}}
    {{Form::file('cover_image')}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Create', ['class' => 'btn'])}}
    {!! Form::close() !!}

</section>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');
</script>
@endsection