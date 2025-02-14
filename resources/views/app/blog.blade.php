@extends('app.layouts.front2')
@section('title', 'Blog Burger Bangor')
@section('url', "https://burgerbangorindonesia.com/blog")
@section('description', content: 'Blog - Burger Bangor indonesia ')
@section('content')
<div class="container mt-5">
        @foreach($posts as $post)
            <div class="container mt-5">
                <div class="card">
                    <img src="{{ asset('storage/' . $post->banner) }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                        <p class="text-muted">By {{ $post->author }} | {{ $post->created_at->format('d M Y') }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
