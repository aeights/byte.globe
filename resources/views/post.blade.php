@extends('layouts.post')
@section('top')
    <div class="post-entry text-center">
        <h1 class="mb-4">{{ $post->title }}</h1>
        <div class="post-meta align-items-center text-center">
            <span class="d-inline-block mt-1">By {{ $post->user['name'] }}</span>
            <span>&nbsp;-&nbsp; {{ $post->created_at }}</span>
        </div>
    </div>
@endsection

@section('author')
    <div class="bio text-center">
        <img src="{{ asset('image profile/default profile.jpg') }}" alt="Avatar" class="img-fluid mb-3">
        <div class="bio-body">
            <h2>{{ $post->user['name'] }}</h2>
            <p class="mb-4">{{ $post->user['email'] }}</p>
        </div>
    </div>
@endsection

@section('body')
    <p>{{ $post->body }}</p>
@endsection