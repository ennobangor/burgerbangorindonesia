@extends('app.layouts.front2')
@section('title', '{{ $post->title }}')
@section('content')
<div class="container py-5">
    <h1>{{ $post->title }}</h1>
    <p class="text-muted">By {{ $post->author }} | {{ $post->created_at->format('d M Y') }}</p>
    <div>{!! $post->body !!}</div>
    <a href="{{ route('blog') }}" class="btn btn-secondary">Back to Blog</a>
</div>
@endsection
