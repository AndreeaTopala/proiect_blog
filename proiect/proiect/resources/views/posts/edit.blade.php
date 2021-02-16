@extends('layouts.app')

@section('content')
    <h1>Modificare articol</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'PUT']) !!}
  <div class="from-group">
        {{Form::label('title', 'Titlu:')}}
        {{Form::text('title',$post->title, ['class'=>'from-control','placeholder'=>'Titlu'])}}
        </div>
          <div class="from-group">
        {{Form::label('subiect', 'Subiectul:')}}
        {{Form::text('subiect',$post->subiect, ['class'=>'from-control','placeholder'=>'Titlu'])}}
        </div>
  <div class="from-group">
        {{Form::label('body', 'Continut:')}}
        {{Form::textarea('body',$post->body, ['class'=>'from-control','placeholder'=>'Continut'])}}
        </div>
        {{Form::submit('Trimite',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
