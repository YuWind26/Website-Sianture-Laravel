@extends('culture/template/app')

@section('content')

<body>
    <section class="cultureSianture pb-3">
        <img class="img-fluid" src="front/image/imgCulture2.png" alt="imageIntro4">
        <div class="container">
          <div class="row justify-content-center mb-5" style="margin-top: -100px">
            <div class="judulCulture col-12 justify-content-center">
              <h1 class="display-3 fw-bold text-center">Budaya Indonesia</h1>
            </div>
          </div>
          <div class="row justify-content-center pb-5  text-center">
            @foreach ($kategori as $row)
              <div class="col-md-3 my-2">
                <div class="bg-success p-3 rounded-3 mt-2">
                  <a href="/culture/{{$row->slug}}" style="text-decoration: none;color:white"><h2>{{$row->nama}}</h2></a>
                </div>
              </div>
            @endforeach
            {{-- <div class="col-md-3 my-2">
              <img height="200px" src="front/image/imgCulture6.png" alt="">
              <div class="bg-success p-3 rounded-3 mt-2 text-center">
                <h2>Pakaian Adat</h2>
              </div>
            </div>
            <div class="col-md-3 my-2">
              <img height="200px" src="front/image/imgCulture9.png" alt="">
              <div class="bg-success p-3 rounded-3 mt-2 text-center">
                <h2>Rumah Adat</h2>
              </div>
            </div>
            <div class="col-md-3 my-2">
              <img height="200px" src="front/image/imgCulture7.png" alt="">
              <div class="bg-success p-3 rounded-3 mt-2 text-center">
                <h2>Senjata Tradisional</h2>
              </div>
            </div> --}}
          </div>
        </div>
      </section>
    
@endsection