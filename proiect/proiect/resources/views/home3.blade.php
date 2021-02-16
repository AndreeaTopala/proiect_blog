@extends('layouts.app')
@section('content')
        <h1>Date profil</h1>
    <a href="/proiect/public/home2" class="btn btn-primary">Inapoi la pagina cu datele profilului</a>


          {!! Form::open(['action' => ['HomeController@update', $date->id],'method' => 'PUT']) !!}
  <div class="from-group">
        {{Form::label('name', 'Nume:')}}
        {{Form::text('name',$date->name, ['class'=>'from-control','placeholder'=>'Nume'])}}
        </div>
          <div class="from-group">
        {{Form::label('email', 'Email:')}}
        {{Form::text('email',$date->email, ['class'=>'from-control','placeholder'=>'Email'])}}
        </div>
        {{Form::submit('Modifica',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

        @endsection
