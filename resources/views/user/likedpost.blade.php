@extends('layouts.dashboard')
@section('links')
    
@endsection
@section('content')
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Liked Post</h3>
                <p class="text-sm mb-0">
                    You can see who liked your post.
                </p>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th>Liked By</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Body</th>
                            <th>Created At</th>
                            <th>Liked By</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($LikedPost as $item)    
                        <tr>
                            <td>{{ substr($item->post_like['title'],0,20) }}</td>
                            <td><img class="rounded" style="height: 35px;" src="{{ asset('post image/'.$item->post_like['image']) }}" alt="{{ $item->image }}"></td>
                            <td>{{ substr($item->post_like['body'],0,30) }}</td>
                            <td>{{ $item->post_like['created_at'] }}</td>
                            <td>{{ $item->user_like['name'] }}</td>
                            <td>{{ $item->user_like['email'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection