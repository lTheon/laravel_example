@extends('Layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <ul>
        @if(count($post_list)>0)
            @foreach($post_list as $post)
                <li>{{$post}}</li>
            @endforeach
            <li>{{$post_list[0]}}</li>
        @endif
    </ul>
@endsection