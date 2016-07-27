@extends('layouts.app')

@section('content')

{{--<form method="post" action="/posts">--}}

    <h1>Create Post</h1>


    {!! Form::open(['method'=>'POST','action'=>'PostsController@store','files'=>true]) !!}







        <div class="group-form">

            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::file('file',['class'=>'form-control']) !!}
        </div>
        <div class="group-form">
            {!! Form::submit('Create Post',['class'=>'btn-primary']) !!}
        </div>

        {{csrf_field()}}


    {!! Form::close() !!}


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection