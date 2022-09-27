@extends('../layout')
@section('title', 'Post Edit')
@section('content')

    <div class="wrapper">
        <h1 style="text-align: center;">Semua Post</h1>
        @if (session('success'))
            <div class="alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @foreach ($posts as $post)
            <tr>
                <td style="width:200px">{{ $post->nama }}</td>
                <td style="width:200px">{{ $post->email }}</td>
                <td style="width:500px">{{ $post->message }}</td>
                <td style="width:100px"><button class="btn btn-success"><a href="{{ route('post.edit', $post->id) }}">
                            Edit
                        </a></button></td>
                <form action="{{ url('posts', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
                </form>
            </tr>
        @endforeach
    </div>

@endsection
