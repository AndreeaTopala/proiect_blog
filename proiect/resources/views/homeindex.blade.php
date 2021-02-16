@extends('layouts.app')

@section('content')
    <h1>Utilizatori</h3>
    @foreach($user as $us)
    
        <div class="well">
    <small>Nume utilizator: {{$us->name}} </small>
    
        </div>
        
    @if(Auth::user()->admin== 1)
    {!!Form::open(['action' => ['HomeController@destroy', $us->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    
    @if($us->admin== 0)
    {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Sterge-ti utilizatorul', ['class' => 'btn btn-danger'])}}
         @endif
                {!!Form::close()!!}
    @endif



    @endforeach


@endsection
