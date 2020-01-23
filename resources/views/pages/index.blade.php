@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
        </div>
        @foreach ($categories as $category)
    
        <h2>{{$category->name}}</h2>
        <div class="posts row">
                @foreach ($category->posts as $post)
                    <div class="col-4 post">
                        <div class="box">
                            <h4>{{$post->title}} </h4>
                            <p>{{$post->body}} </p>
                            @auth
                                <a href="{{route('post.delete',$post->id)}} ">Delete</a>
                            @endauth
                        </div>

                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
