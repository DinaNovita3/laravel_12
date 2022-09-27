<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function galery()
    {
        return view('galery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        return view('index');
    }

    public function edit()
    {
        return view('edit');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->all());
        $posts = Post::all();
        return back()->with('success', 'Pesan berhasil dikirim');
    }
}
