@extends('Layouts.app')
@section('content')
    <h1>This is single post site</h1>
    <h2>Title: {{$post->title}}</h2>
    <p>Body: {{$post->body}}</p>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href='/posts/{{$post->id}}/edit' class='btn btn-success'>Edit post</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection