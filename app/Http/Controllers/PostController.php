<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Post;
use App\Models\Teacher;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('Teacher')
            ->get();
//        return $posts;


        return view('posts.index')
            ->with([
                'posts' => $posts,
            ]);
    }
}
