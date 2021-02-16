@extends('layouts.app')

@section('content')
    <a href="/proiect/public/posts" class="btn btn-primary">Inapoi la artcole</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Postat in data si la ora: {{$post->created_at}} in domeniu: {{$post->subiect}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id ==  $post->user_id )
    <a href="/proiect/public/posts/{{$post->id}}/edit" class="btn btn-primary">Editare</a>
    @endif
    @if(Auth::user()->admin== 1 ||Auth::user()->id ==  $post->user_id)
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
    @endif
@endsection
