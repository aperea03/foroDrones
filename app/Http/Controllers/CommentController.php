<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class CommentController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        // Aquí puedes agregar la lógica para guardar la imagen si deseas permitir la subida de imágenes en los posts
        $post->save();

        return redirect()->route('home');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
