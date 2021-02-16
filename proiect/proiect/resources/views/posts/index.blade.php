@extends('layouts.app')

@section('content')
    <h1>Articole</h3>
    @if(count($posts)>0)
    @foreach($posts as $post)
    <ul class="list-group">
        <div class="well">
            <h3 ><a href="/proiect/public/posts/{{$post->id}}"> {{$post->title}}</h3>
    <small>Postat in data si la ora: {{$post->created_at}} in domeniu: {{$post->subiect}}</small>
        </div>
    @endforeach
    </ul>
    {{$posts->links()}}

    @else {<p>Nu au fost gasite postari</p>
}

@endif
@endsection
