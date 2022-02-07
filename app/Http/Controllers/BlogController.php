<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blog.tabla_blogs',compact('blogs'));
    }

    public function create_view()
    {
        return view('blog.insert');
    }

    public function create(Request $request)
    {
        $blog = new Blog();
        $blog->titulo = $request->titulo;
        $blog->descripcion = $request->descripcion;
        $blog->visibility = 1;
        $blog->user_id = auth()->user()->id;
        $blog->save();

        return redirect()->to('/');
    }

    public function update_view($id)
    {
        $blog = Blog::find($id);
        return view('blog.update',compact('blog'));
    }

    public function update(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->titulo = $request->titulo;
        $blog->descripcion = $request->descripcion;
        if(auth()->user()->rol_id == 1)
            $blog->visibility = $request->visibility;
        $blog->save();

        return redirect()->to('/');
    }
}
