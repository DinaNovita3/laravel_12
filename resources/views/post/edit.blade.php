@extends('../layout')
@section('title', 'Post Edit')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <p>ntntnt</p>
                <div class="wrapper mt-5">
                    <h1>Edit Post</h1>

                    @if (session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('posts', $post->id) }}">
                        @csrf
                        @method('PUT')
                        <input name="nama" value="{{ $post->Nama }}" type="text" placeholder="Name...."
                            class="mb-2 mt-3 " style="width : 100%"><br>
                        <input name="email" value="{{ $post->Email }}" type="email" placeholder="Email...."
                            class="mb-2" style="width : 100%"><br>
                        <textarea name="message" id="" cols="30" rows="10" class="box" placeholder="Message...."
                            style="width : 100%">{{ $post->Message }}</textarea><br>
                        <button class="btn btn-primary mt-2" class="mb-2 mt-3 " style="width : 100%">Simpan</button>
                    </form>
                    <a href="{{ route('posts.index') }}">
                        <button class="btn btn-primary mt-3" class="mb-2 mt-3 " style="width : 100%">Kembali</button>
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
