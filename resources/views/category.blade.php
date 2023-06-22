@extends('layouts.category')
@section('content')
    @foreach ($posts as $item)
    <div class="blog-entry d-flex blog-entry-search-item">
        <a href="{{ url('/post/'.$item->slug) }}" class="img-link me-4">
            <img style="object-fit: cover;height: 150px;" src="{{ asset('post image/'.$item->image) }}" alt="Image" class="img-fluid">
        </a>
        <div>
            <span class="date">{{ $item->created_at }} &bullet; <a href="{{ url('/category/'.$item->category_id) }}">{{ $item->category['category'] }}</a></span>
            <h2><a href="{{ url('/post/'.$item->slug) }}">{{ $item->title }}</a></h2>
            <p>{{ substr($item->body,0,150) }}</p>
            <p><a href="{{ url('/post/'.$item->slug) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
        </div>
    </div>
    @endforeach
@endsection