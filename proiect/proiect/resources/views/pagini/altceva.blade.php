@extends('layouts.app')
@section('content')
        <h1>Date profil</h1>
        <h3>Nume de utilizator: {{ Auth::user()->admin }}</h3>
        <h3>Email: {{ Auth::user()->email }}</h3>
        <h3>Momentul inregistrari pe platforma: {{ Auth::user()->created_at }}  </h3>
        @endsection
