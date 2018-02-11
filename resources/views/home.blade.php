@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    You are logged in! <br>
                    <a href='/posts/create' class='btn btn-default'>Create post</a>
                    @foreach($posts as $post)
                        <div>
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->body}}, Created: {{$post->created_at}}, Modified: {{$post->updated_at}}</p>
                            <a href='/posts/{{$post->id}}/edit' class='btn btn-success'>Edit post</a>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
