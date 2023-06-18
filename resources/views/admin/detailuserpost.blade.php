@extends('layouts.dashboard')
@section('links')
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">User Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Post</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
        <a href="/blog" class="btn btn-sm btn-neutral">Blog</a>
    </div>
@endsection
@section('content')
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Detail Post</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <form action="{{ url('/save-user-post') }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="mb-0">
                                Review user posts, whether posts written by users are relevant and do not violate the rules, change the status to <code>Accepted</code>, if not change to <code>Declined</code>.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="validationCustom01">Author</label>
                            <input name="title" type="text" class="form-control bg-white" id="validationCustom01" placeholder="Post Title"
                                value="{{ $post->user['name'] }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="validationCustom02">Email</label>
                            <input name="title" type="text" class="form-control bg-white" id="validationCustom02" placeholder="Post Title"
                                value="{{ $post->user['email'] }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="validationCustom03">Status</label>
                            <select name="status" class="form-control" id="validationCustom03" placeholder="Select Status" data-toggle="select" required>
                                <option value="{{ $post->status }}">{{ $post->status }}</option>
                                <option value="Pending">Pending</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Declined">Declined</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="validationCustom04">Title</label>
                            <input name="title" type="text" class="form-control bg-white" id="validationCustom04" placeholder="Post Title"
                                value="{{ $post->title }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="validationCustom05">Category</label>
                            <input name="category" type="text" class="form-control bg-white" id="validationCustom05" placeholder="Post Title"
                                value="{{ $post->category['category'] }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-control-label" for="image">Image</label>
                            <img style="width: 300px" class="card" id="image" src="{{ asset('post image/'.$post->image) }}" alt="{{ $post->image }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Body</label>
                            <textarea name="body" class="form-control bg-white" id="exampleFormControlTextarea1" rows="5" readonly>{{ $post->body }}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection