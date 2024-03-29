<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    public function showposts(User $user)
    {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(20);
        return view('user.posts', compact('posts'));
    }

    public function showcomments(User $user)
    {
        $comments = Comment::where('user_id', $user->id)->latest()->paginate(20);
        return view('user.comments', compact('comments'));
    }
    public function destroy()
    {
        // Obtener el usuario logeado actualmente
        $user = Auth::user();

        // Eliminar al usuario
        $user->delete();

        // Desconectar al usuario de la sesión
        Auth::logout();

        // Redirigir a una página o hacer alguna otra acción
        return redirect()->route('home')->withSuccess('Tu cuenta ha sido eliminada correctamente.');
    }
}
