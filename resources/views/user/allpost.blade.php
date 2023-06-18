@extends('layouts.dashboard')
@section('links')
    <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Post</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
        <a href="/dashboard/user/post/add" class="btn btn-sm btn-neutral">Add Post</a>
        <a href="/blog" class="btn btn-sm btn-neutral">Blog</a>
    </div>
@endsection
@section('content')
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Posts</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive" data-toggle="list" data-list-values='["title", "image", "body-post", "create", "status"]'>
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="title">Title</th>
                            <th scope="col" class="sort" data-sort="image">Image Post</th>
                            <th scope="col" class="sort" data-sort="body-post">Body</th>
                            <th scope="col" class="sort" data-sort="create">Created At</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($posts as $item)
                        <tr>
                            <td class="title">
                                {{ substr($item->title,0,20) }}...
                            </td>
                            <td class="image">
                                <img class="rounded" style="height: 35px;" src="{{ asset('post image/'.$item->image) }}" alt="{{ $item->image }}">
                            </td>
                            <td class="body-post">
                                {{ substr($item->body,0,30) }}...
                            </td>
                            <td class="create">
                                {{ $item->created_at }}
                            </td>
                            <td>
                                <span class="badge badge-dot">
                                    @if ($item->status == 'Pending')
                                    <i class="bg-info"></i>
                                    <span class="status">{{ $item->status }}</span>
                                    @endif
                                    @if ($item->status == 'Accepted')
                                    <i class="bg-success"></i>
                                    <span class="status">{{ $item->status }}</span>
                                    @endif
                                    @if ($item->status == 'Decline')
                                    <i class="bg-warning"></i>
                                    <span class="status">{{ $item->status }}</span>
                                    @endif
                                </span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form action="{{ url('/dashboard/user/post/edit') }}" method="GET">
                                            @csrf
                                            <input value="{{ $item->id }}" type="hidden" name="id">
                                            <input value="{{ $item->image }}" type="hidden" name="old_image">
                                            <button type="submit" class="dropdown-item">Edit</button>
                                        </form>
                                        <form action="{{ url('/delete-user-post') }}" method="POST" onsubmit="return confirm('Are you sure want to delete this post?')">
                                            @csrf
                                            <input value="{{ $item->id }}" type="hidden" name="id">
                                            <input value="{{ $item->image }}" type="hidden" name="old_image">
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
