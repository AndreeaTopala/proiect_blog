@extends('layouts.app')

@section('content')
    <h1>Scrie un articol</h1>
  {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
  <div class="from-group">
        {{Form::label('title', 'Titlu:')}}
        {{Form::text('title','',['class'=>'from-control','placeholder'=>'Titlu'])}}
        </div>
  <div class="from-group">
        {{Form::label('subiect', 'Subiectul:')}}
        {{Form::text('subiect','',['class'=>'from-control','placeholder'=>'Subiectul'])}}
        </div>
  <div class="from-group">
        {{Form::label('body', 'Continut:')}}
        {{Form::textarea('body','',['class'=>'from-control','placeholder'=>'Continut'])}}
        </div>  
        {{Form::submit('Trimite',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
