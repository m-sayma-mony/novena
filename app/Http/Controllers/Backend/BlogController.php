<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog.index', ['blogs' => Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $image = $request->image;

        if($image){
            $path = 'assets/blog-images/';
            $imageName = time().rand().'.'.$image->extension();

            $image->move($path, $imageName);
            $blog->image = $path.$imageName;
        }
        $blog->save();

        return back()->with('message', 'Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('backend.blog.edit', ['blogs' => Blog::find($id), 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $blog               = Blog::find($id);
        $blog->name         = $request->name;
        $blog->description  = $request->description;
        $image              = $blog->image;

        if($image){
            if(file_exists($image)){
                unlink($image);
            }
        }

        $blog->save();

        return back()->with('message', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $blog = Blog::find($id);

        if($blog->image){
            if(file_exists($blog->image)){
                unlink($blog->image);
            }
        }

        $blog->delete();

        return back()->with('message', 'Blog Delete Successfully');
    }
}
