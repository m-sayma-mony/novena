@extends('backend.master')

@section('title', 'Add Blog')

@section('content')
    <div class="container" style="margin-top: 7%; margin-left: 15%">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h1 class="text-center">Add Blog</h1>
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @if (Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            <option value="" disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" rows="3" class="form-control" name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary mb-5">Add Blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection
