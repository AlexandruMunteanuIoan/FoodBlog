<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FoodBlogController extends Controller
{

    public function blog(){
        $blogs = Post::latest()->get();
        return view('blogs.blog')->with('blogs',$blogs);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $newImageName = time().'-'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path('img'), $newImageName);
        Post::create([
            'title'=> $request->title,
            'description'=>$request->description,
            'images'=>$newImageName
        ]);
        return redirect(route('blog'));
    }

    public function edit(Post $blog){
        return view('blogs.edit')->with('blog', $blog);
    }

    public function update(Request $request,Post $blog){
        $blog->title = $request->title;
        $blog->description = $request->description;

        if($request->image)
        {
            $newImageName = time().'-'.$request->title.'.'.$request->image->extension();
            $request->image->move(public_path('img'), $newImageName);
            $blog->images = $newImageName;
        }
        $blog->save();
        return redirect(route('blog'));
    }

    public function read(Post $blog){
        return view('blogs.read')->with('blog', $blog);
    }

    public function delete(Post $blog){
        $blog->delete();
        return redirect(route('blog'));
    }
}

