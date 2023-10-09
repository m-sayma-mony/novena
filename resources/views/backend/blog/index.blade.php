@extends('backend.master')

@section('title', 'Manage Blog')

@section('content')
    <div class="container" style="margin-top: 10%; margin-left: 15%">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="rounded h-100 p-4">
                    <h1 class="mb-4 text-center">Manage Blog</h1>
                    @if (Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)  
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$blog->id}}</td>
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->image}}</td>
                                    <td>{{$blog->status== 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-sm btn-dark mb-2 ms-2">
                                            Edit
                                        </a><br>
                                        <a href="{{route('blogs.destroy', $blog->id)}}" class="btn btn-sm btn-dark">
                                            Delete
                                        </a>  
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
