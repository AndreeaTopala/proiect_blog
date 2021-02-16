@extends('layouts.app')
@section('content')
        <h1>Date profil</h1>

        <div class="well">
    <h4>Nume de utilizator: {{$user->name}}</h4>
    <h4>Email: {{$user->email}}</h4>
    <h4>Nr de articole publicate: {{count($posts)}}</h4>
    @if(Auth::user()->admin==1)
    
    <h4>Sunteti administrator</h4>
    @else 
    <h4>Sunteti utilizator</h4>
    @endif
    <a href="/proiect/public/home2/{{$user->id}}" class="btn btn-primary">Editati datele dumneavostra</a>

        @endsection
