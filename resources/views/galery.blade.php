
@extends('layout')
@section('content')

 

<section class="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{asset('img/g3.jpg')}}" class="card-img-top" alt="galery1">
              <div class="card-body">
                <p class="card-text">Piagam penghargaan prestasi yang diperoleh sebagai Siswa MADIN Mamba'ul Khoir kelas 2 terbaik <b><i>Peringkat I (Satu)</i></b>.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/g2.jpg" class="card-img-top" alt="galery2">
              <div class="card-body">
                <p class="card-text">Piagam penghargaan sebagai Pasukan Pengibar Bendera Merah Putih pada peringatan HUT Proklamasi Kemerdekaan Indonesia Ke-73 Tahun 2018 di Kecamatan Purwodadi.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/g1.jpg" class="card-img-top" alt="galery3">
              <div class="card-body">
                <p class="card-text">Piagam penghargaan prestasi yang diperoleh sebagai Siswa MADIN Mamba'ul Khoir kelas 4 terbaik <b><i>Peringkat I (Satu)</i></b>.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/g4.jpg" class="card-img-top" alt="galery4">
              <div class="card-body">
                <p class="card-text">Sertifikat Praktik Kerja Industri Pada PT. DATASOFT SOLUSI INDONESIA.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/g5.jpg" class="card-img-top" alt="galery5">
              <div class="card-body">
                <p class="card-text">Sertifikat yang diberikan sebagai Peserta dalam COMPPAS (Competition of Pramuka Penggalang SMANESA).</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/g6.jpg" class="card-img-top" alt="galery6">
              <div class="card-body">
                <p class="card-text">Sertifikat yang diberikan sebagai Peserta dalam Olimpiade IPS Tingkat SMP/MTs, se-Kab/Kota Pasuruan dan sekitarnya dalam rangkat HUT SMANESA ke-35.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection