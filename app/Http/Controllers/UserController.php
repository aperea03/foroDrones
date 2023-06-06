<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

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
        return view('user.index');
    }

    public function showcomments(User $user)
    {
        return view('user.index');
    }
}
