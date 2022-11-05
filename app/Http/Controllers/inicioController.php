<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Inicio;
use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', true)->orderBy('id', 'desc')->paginate(6);
        $inicios = Inicio::all();
        $posts_likes = Post::select('id', 'title', 'image', 'slug')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->limit(5)
            ->get();

        $count = 1;
        foreach ($posts_likes as $post_like) {
            $post_like->count = $count;
            $count++;
        }

        return view('inicio.inicio', compact('posts', 'posts_likes', 'inicios'));
    }

    public function indexportafolio()
    {
        $posts = Post::where('status', true)->orderBy('id', 'desc')->paginate(6);

        $posts_likes = Post::select('id', 'title', 'image', 'slug')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->limit(5)
            ->get();

        $count = 1;
        foreach ($posts_likes as $post_like) {
            $post_like->count = $count;
            $count++;
        }

        return view('inicio.portafolio', compact('posts', 'posts_likes'));
    }

    public function indexInicio()
    {
        $inicios = Inicio::all();

        return view('inicio.inicio', compact('inicios'));
    }
}
