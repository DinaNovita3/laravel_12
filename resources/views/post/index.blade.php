@extends('../layout')

@section('content')
    <h1 class="container-fluid mt-5 pt-5" style="text-align: center; ">Semua Pesan</h1>
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="container-fluid mt-5 pt-2">
        <table class="table table-striped-columns">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Message</th>
                <th>Gambar</th>
                <th colspan="2">Action</th>
            </tr>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->Nama }}</td>
                    <td>{{ $post->Email }}</td>
                    <td>{{ $post->Message }}</td>
                    <td>{{ $post->Gambar}}</td>
                    <td>
                        <img src="{{ asset('images/.$post->gambar') }}" alt="" style="width: 100px ">
                    </td>
                    <td style="width: 100px">
                        <a href="{{ route('posts.edit', $post->id) }}">
                            <button class="btn btn-success">
                                Edit</button>
                        </a>
                        <form method="post" action="{{ url('posts', $post->id) }}">
                            @csrf
                            @method('DELETE')
                    <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
                    </form>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
