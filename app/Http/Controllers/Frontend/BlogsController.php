<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('frontend.blog.index', ['categories' => Category::all(), 'blogs' => Blog::all()]);
    }
}
