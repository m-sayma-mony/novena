@extends('backend.master')

@section('title', 'Manage Category')

@section('content')
    <div class="container" style="margin-top: 10%; margin-left: 15%">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="rounded h-100 p-4">
                    <h1 class="mb-4 text-center">Manage Category</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)  
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-dark">
                                            Edit
                                        </a>
                                        <a href="" class="btn btn-sm btn-dark ms-2">
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
