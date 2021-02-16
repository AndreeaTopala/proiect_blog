@extends('layouts.app')
@section('content')
        <h1>{{$titlu}}</h1>
        <p>si mananc mandarine</p>
        <p>si au gust amar</p>
        @if(count($a1) > 0)
            <ul class="list-group">
            @foreach($a1 as $a2)
                <li class="list-group-item">{{$a2}}</li>
            @endforeach
            </ul>
        @endif
        @endsection
