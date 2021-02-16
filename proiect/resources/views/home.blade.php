@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @if(count($posts)>0)
                <tabe class="table table-striped">
                    <tr>
                        <th>Titlu articol:  </th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)                    
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/proiect/public/posts/{{$post->id}}/edit" class="btn btn-primary">Editare</a></td>
                        <td>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                </tabe>
                @else <p>Nu ati scris nici un articol.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
