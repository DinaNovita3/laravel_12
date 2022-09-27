@extends('layout')
@section('content')

<section class="contact mt-5 " id="contact">

<div class="row">
    <div class="content">
        <h3 class="title">Contact Info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> dinanovita33333@gmail.com</h3>
            <h3> <i class="fas fa-phone"></i> +62 831-9030-5063 </h3>
            <h3> <i class="fas fa-phone"></i> +62 881-9894-947 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Jawa Timur, Indonesia. </h3>
        </div>


    </div>

    <form action="/contact/submit" method="post">
    @csrf
    @if(session('success'))
    <div class="alert alert-success">
        <p>{{session('success')}}</p>
    </div>
    @endif
    <div class="inputbox">
        <input type="text" name="nama" placeholder="name" class="box @error('name') unvalidate-input @enderror">

        @error('nama')
        <div class="unvalidated">
        {{$message}}
        </div>
        @enderror
    </div>
    <div class="inputbox">
        <input type="email" name="email" placeholder="email" class="box @error('name') unvalidate-input @enderror">

        @error('email')
        <div class="unvalidated">
        {{$message}}
        </div>
        @enderror
    </div>
    <div class="inputbox">
        <textarea name="message" id="" cols="30" rows="10" class="box box @error('name') unvalidate-input @enderror" placeholder="message"></textarea>

        @error('message')
        <div class="unvalidated">
        {{$message}}
        </div>
        @enderror
    </div>

    <div class="container">
        <form enctype="multipart/form-data" method="POST" action="{{ url('posts/upload') }}">
         @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Masukkan Gambar</label>
            <div class="col-sm-12">
                <input type="file" name="gambar" class="form-control {{ $errors->has('gambar')?'is-invalid':'' }}" id="gambar" name="gambar">
                @if($errors->has('gambar'))
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$errors->first('gambar')}}
                  </div>
                @endif
            </div>
        </div>

    </div>
        <button type="submit" class="btn btn-danger mt-3"> Kirim <i class="fas fa-paper-plane"></i> </button>
    </form>


</div>






</section>
@endsection
