@extends('home/template/app')

@section('content')
  <section class="heroSianture">
      <img src="front/image/imgIntro4.png"  alt="imageHome">
      <div class="container">
        <div class="row">
          <div class="col fs-3 judul">
            Hai, Selamat Datang di
          </div>
        </div>
        <div class="row">
          <div class="col-lg display-3 fw-bold judul">
            Indonesian Culture
            <hr class="style1 horizontal-line">
          </div>
        </div>
        <div class="row">
          <div class="col fs-2 fw-bold judul">
            Belajar Mengenal Budaya di Indonesia
          </div>
        </div>
        <div class="row mt-3 pb-5">
          <div class="col buttonJelajahi">
            <button type="button" class="btn btn-dark fw-bold" style="border-radius: 24px;width: 130px;"><a href="/culture">JELAJAHI</a></button>
          </div
        </div>
      </div>
      <div class="row justify-content-between mt-5">
        <div class="col fs-1 judul fw-bold">
          Pengertian Budaya
        </div>
      </div>
      <div class="row">
        <div class="col fs-5 mb-4 judul">
          Budaya atau kebudayaan berasal dari bahasa Sanskerta yaitu “Buddhayah”, yang merupakan bentuk jamak dari “Buddhi” (budia atau akal),
          diartikan sebagai hal-hal yang berkaitan dengan budi dan akal manusia. Bentuk lain dari kata budaya adalah “Kultur” yang berasal dari bahasa Latin yaitu “Cultura”.
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-sm-12 col-lg-6 pengertianBudaya" style="background-color: #4B152F;border-radius: 15px;">
            <p style="color: white;padding: 10px;">Budaya merupakan gaya hidup yang berkembang dan dimiliki oleh suatu kelompok di wilayah tertentu yang diwariskan dari generasi ke generasi. Budaya bersifat kompleks, abstrak, dan luas. Banyak aspek budaya turut menentukan perilaku komunikatif. 
              Indonesia merupakan negara kepulauan yang terdiri dari berbagai daerah dengan ciri khas suku, budaya, dan adatnya masing-masing, hal ini membuat budaya di Indonesia sangat beragam dan menjadi icon bagi turis asing untuk melihat dan belajar budaya yang ada di Indonesia. 
              Karena banyaknya budaya yang ada di Indonesia, kita bisa belajar dan mengenal budaya dengan mudah di SIANTURE</p>
        </div>
        <div class="col-sm-12 col-lg-6 pengertianBudaya">
          <img src="front/image/imgIntro1.png"  class="img-fluid" alt="imgIntro1">
        </div>
      </div>
    </div>
  </section>
@endsection