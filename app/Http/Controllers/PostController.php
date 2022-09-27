<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:200',
            'email' => 'required|email|min:5|max:255',
            'message' => 'required|max:3000',
            'gambar' => 'required|file|image|max:5000',
        ]);

        $namaFile = $request->gambar->getClientOriginalName();
        $path = $request->gambar->move('images', $namaFile);
        $path = str_replace('\\', '/', $path);

        $input = $request->all();
        $post = Post::create($input);

        $post = Post::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
            'gambar' => $path
        ]);
        return back()->with('success', 'Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:200',
            'email' => 'required|email|min:5|max:255',
            'message' => 'required|max:3000',
        ]);

        $post = Post::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbarui!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->with('success', 'Berhasil dihapus.');
    }

    public function formUpload()
    {
        return view('post.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|image|max:5000'
        ]);

        $namaFile = $request->gambar->getClientOriginalName();
        $path = $request->gambar->move('images', $namaFile);
        $path = str_replace('\\', '/', $path);

        echo 'Gambar disimpan di dalam folder ' . $path;
        $pathBaru = asset('images/' . $namaFile);
        echo ' Proses Upload berhasil, untuk melihat hasil gambar silahkan klik <a href="' . $pathBaru . '">LIHAT</a>';

    }
}
