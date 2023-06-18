@extends('layouts.dashboard')
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
                            <th>Option</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($posts as $item)    
                        <tr>
                            <td>{{ $item->user['name'] }}</td>
                            <td>{{ $item->title }}</td>
                            <td><img class="rounded" style="height: 35px;" src="{{ asset('post image/'.$item->image) }}" alt="{{ $item->image }}"></td>
                            <td>{{ $item-> }}</td>
                            <td>{{ $item-> }}</td>
                            <td>{{ $item-> }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
