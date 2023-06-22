@extends('layouts.blog')
@section('top')
    <div class="col-md-4">
        <a href="" class="h-entry mb-30 v-height gradient">
            <div class="featured-img">
                <img style="background-size: cover; height: 300px;" src="{{ asset('/post image/' . $random[0]->image) }}"
                    alt="">
            </div>

            <div class="text">
                <span class="date">{{ $random[0]->created_at }}</span>
                <h2>{{ $random[0]->title }}</h2>
            </div>
        </a>
        <a href="" class="h-entry v-height gradient">
            <div class="featured-img">
                <img style="background-size: cover; height: 300px;" src="{{ asset('/post image/' . $random[1]->image) }}"
                    alt="">
            </div>

            <div class="text">
                <span class="date">{{ $random[1]->created_at }}</span>
                <h2>{{ $random[1]->title }}</h2>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="" class="h-entry img-5 h-100 gradient">
            <div class="featured-img">
                <img style="background-size: cover;" src="{{ asset('/post image/' . $random[2]->image) }}" alt="">
            </div>

            <div class="text">
                <span class="date">{{ $random[2]->created_at }}</span>
                <h2>{{ $random[2]->title }}</h2>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="" class="h-entry mb-30 v-height gradient">
            <div class="featured-img">
                <img style="background-size: cover; height: 300px;" src="{{ asset('/post image/' . $random[3]->image) }}"
                    alt="">
            </div>

            <div class="text">
                <span class="date">{{ $random[3]->created_at }}</span>
                <h2>{{ $random[3]->title }}</h2>
            </div>
        </a>
        <a href="" class="h-entry v-height gradient">
            <div class="featured-img">
                <img style="background-size: cover; height: 300px;" src="{{ asset('/post image/' . $random[4]->image) }}"
                    alt="">
            </div>

            <div class="text">
                <span class="date">{{ $random[4]->created_at }}</span>
                <h2>{{ $random[4]->title }}</h2>
            </div>
        </a>
    </div>
@endsection
{{-- @section('first-left')
    <div class="col-md-6">
        <div class="blog-entry">
            <a href="" class="img-link">
                <img src="{{ asset('post image/' . $programming[0]->image) }}" alt="Image" class="img-fluid">
            </a>
            <span class="date">{{ $programming[0]->created_at }}</span>
            <h2><a href="">{{ $programming[0]->title }}</a></h2>
            <p>{{ substr($programming[0]->body, 0, 30) }}</p>
            <p><a href="" class="btn btn-sm btn-outline-primary">Read More</a></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="blog-entry">
            <a href="" class="img-link">
                <img src="{{ asset('post image/' . $programming[1]->image) }}" alt="Image" class="img-fluid">
            </a>
            <span class="date">{{ $programming[1]->created_at }}</span>
            <h2><a href="">{{ $programming[1]->title }}</a></h2>
            <p>{{ substr($programming[1]->body, 0, 30) }}</p>
            <p><a href="" class="btn btn-sm btn-outline-primary">Read More</a></p>
        </div>
    </div>
@endsection
@section('first-right')
    <li>
        <span class="date">{{ $programming[2]->created_at }}</span>
        <h3><a href="">{{ $programming[2]->title }}</a></h3>
        <p>{{ substr($programming[2]->body, 0, 30) }}</p>
        <p><a href="#" class="read-more">Continue Reading</a></p>
    </li>

    <li>
        <span class="date">{{ $programming[3]->created_at }}</span>
        <h3><a href="">{{ $programming[3]->title }}</a></h3>
        <p>{{ substr($programming[3]->body, 0, 30) }}</p>
        <p><a href="#" class="read-more">Continue Reading</a></p>
    </li>

    <li>
        <span class="date">{{ $programming[4]->created_at }}</span>
        <h3><a href="">{{ $programming[4]->title }}</a></h3>
        <p>{{ substr($programming[4]->body, 0, 30) }}</p>
        <p><a href="#" class="read-more">Continue Reading</a></p>
    </li>
@endsection --}}
@section('all-post')
    @foreach ($allpost as $item)
    <div class="col-lg-4 mb-4">
        <div class="post-entry-alt">
            <a href="" class="img-link"><img style="object-fit: cover; height: 250px;" src="{{ asset('post image/'.$item->image) }}" alt="Image"
                    class="img-fluid"></a>
            <div class="excerpt">
                <h2><a href="">{{ $item->title }}</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                    <span class="d-inline-block mt-1">By <a href="#">{{ $item->user['name'] }}</a></span>
                    <span>{{ $item->created_at }}</span>
                </div>
                <p>{{ substr($item->body, 0, 80) }}</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
        </div>
    </div>
    @endforeach
@endsection
