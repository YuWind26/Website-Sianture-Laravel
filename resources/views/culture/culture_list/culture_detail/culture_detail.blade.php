@extends('culture/culture_list/culture_detail/template/app')

@section('content')
<section class="cultureListSianture">
  <img src="../../front/image/imgCultureList4.png"  alt="imageIntro4">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-5">
        <img src="../../front/image/imgProcessing1.png" class="img-fluid " style="width:340px;" alt="">
        <div class="text-light bg-dark p-3 text-center rounded-pill">
          <h2>Rumah Adat Joglo</h2>
          <h4>Asal : Jawa Tengah</h4>
        </div>
      </div>
      <div class="col-5">
        <div class="text-light bg-dark p-3 rounded-3">
          Nama Joglo diambil dari dua suku kata yaitu “Tajug” dan “Loro”. 
          Artinya adalah penggabungan dua tajug. Hal ini didasarkan pada atap rumah Joglo yang berbentuk tajug yang serupa dengan gunung.

          Orang Jawa kuno percaya bahwa gunung merupakan simbol yang sakral dan merupakan tempat tinggal bagi para dewa. Oleh karena itu, dua tajug dipilih menjadi atap rumah adat Jawa Tengah. Penyangga dari atap rumah adalah empat pilar yang disebut dengan “Saka guru”. Pilar ini adalah representasi arah mata angin yaitu timur, selatan, utara, dan juga barat.

          Rumah tradisional Jawa terbagi menjadi dua bagian, yakni rumah induk dan rumah tambahan.
          Rumah induk terdiri dari beberapa bagian sebagai yaitu :
          Pendapa/Pendopo
          Pringgitan
          Emperan
          Omah dalem
          Senthong-kiwa
          Senthong tengah
          Senthong-tengen
          Gandhok
        </div>
      </div>

    </div>



      <a href="/culture/culture-list">
        <img src="../../front/image/previous.png" alt="">
      <a>
   



</section>

@endsection