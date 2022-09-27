@extends('../layout')
@section('title', 'Buat Post Baru')
@section('content')

<div class="wrapper mt-5 pt-5" style= "text-align: center;">
    <h2>Buat Post Baru</h2>

    @if (session('success'))
    <div class="alert-success">
        <p>{{session('success')}}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('posts') }}">
        @csrf
        <input name="nama" type="text" placeholder="Name....">
        <input name="email" type="email" placeholder="Email....">
        <textarea name="message" id="" cols="30" rows="10" class="box" placeholder="Message...."></textarea>
        <button class="btn-blue btn-primary">Submit</button>

</div>
</div>
@endsection