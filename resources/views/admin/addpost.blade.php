@extends('layouts.dashboard')
@section('links')
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Admin Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Post</li>
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
                <h3 class="mb-0">Add Post</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <form action="{{ url('/add-admin-post') }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="mb-0">
                                For adding a post, you need to fill <code>post title</code>, <code>post category</code>, <code>post image</code>, and <code>the body of post</code>.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="form-control-label" for="validationCustom01">Title</label>
                            <input name="title" type="text" class="form-control" id="validationCustom01" placeholder="Post Title"
                                value="" required>
                            <div class="invalid-feedback">
                                Title must be filled
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-control-label" for="validationCustom02">Category</label>
                            <select name="category" class="form-control" id="validationCustom02" placeholder="Select Category" data-toggle="select" required>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-control-label" for="customFileLang">Image</label>
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="customFileLang" lang="en" required>
                                <label class="custom-file-label" for="customFileLang">Select file</label>
                                <div class="invalid-feedback">
                                    Please select an image post
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Body</label>
                            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Body must be filled
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Add Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection