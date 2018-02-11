@extends('Layouts.app')
@section('content')
    @if($error)
        <div class='alert alert-danger'>{{$error}}</div>
    @endif
    @foreach ($posts as $post)
        <div>
            <h2><a href='/posts/{{$post->id}}'>Title: {{$post->title}}</a></h2>
            <p>Body: {{$post->body}}, Created: {{$post->created_at}} by {{$post->user->name}}, Modified: {{$post->updated_at}}</p>
        </div>
    @endforeach
    {{$posts->links()}}
@endsection