@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
        @foreach ($posts as $post)
            <div class="card m-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text"></p>
                    <a href="/post/{{$post->id}}" class="card-link">More...</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
