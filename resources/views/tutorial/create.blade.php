@extends('layouts.app')
@section('content')
<section>
    {!! Form::open(['action' => 'TutorialController@store', 'files' => true]) !!}
    {{Form::label('title', 'Tutorial title', ['class' => 'form-label'])}}
    {{Form::text ('title')}}

    {{Form::label('article-ckeditor', 'The Body', ['class' => 'form-label'])}}
    {{Form::textarea('article-ckeditor', "", ['name'=>'body'])}}

    {{Form::label('title-image', 'Title image', ['class' => 'form-label'])}}
    
    {{Form::submit('Create', ['class' => 'btn'])}}
    {!! Form::close() !!}

</section>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');
</script>
@endsection