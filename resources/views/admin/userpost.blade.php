@extends('layouts.dashboard')
@section('links')
    
@endsection
@section('content')
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">User Posts</h3>
                <p class="text-sm mb-0">
                    The following is a post from a user. Do a review for each post from the user.
                </p>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($posts as $item)    
                        <tr>
                            <td>{{ $item->user['name'] }}</td>
                            <td>{{ substr($item->title,0,20) }}...</td>
                            <td><img class="rounded" style="height: 35px;" src="{{ asset('post image/'.$item->image) }}" alt="{{ $item->image }}"></td>
                            <td>{{ $item->category['category'] }}</td>
                            <td>{{ substr($item->body,0,30) }}...</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <span class="badge badge-dot">
                                    @if ($item->status == 'Pending')
                                    <i class="bg-info"></i>
                                    <span>{{ $item->status }}</span>
                                    @endif
                                    @if ($item->status == 'Accepted')
                                    <i class="bg-success"></i>
                                    <span>{{ $item->status }}</span>
                                    @endif
                                    @if ($item->status == 'Decline')
                                    <i class="bg-warning"></i>
                                    <span>{{ $item->status }}</span>
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form action="{{ url('/dashboard/admin/user-post/detail') }}" method="GET">
                                            @csrf
                                            <input value="{{ $item->id }}" type="hidden" name="id">
                                            <button type="submit" class="dropdown-item">Detail</button>
                                        </form>
                                        <form action="{{ url('/delete-user-post') }}" method="POST" onsubmit="return confirm('Are you sure want to delete this post?')">
                                            @csrf
                                            <input value="{{ $item->id }}" type="hidden" name="id">
                                            <input value="{{ $item->image }}" type="hidden" name="old_image">
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
