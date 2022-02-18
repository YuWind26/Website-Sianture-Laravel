@extends('contact/template/app')

@section('content')
<section class="profilSianture">
  <img src="front/image/imgProfil2.png"  class="img-fluid"  alt="imageIntro4">
  <div class="container">
    <div class="row justify-content-center" style="margin-top:-400px">
      <div class="judulCulture col justify-content-center">
        <h1 class="text-center display-3 mb-4 fw-bold">My Contact</h1>
      </div>
    </div>
    <div class="row justify-content-center pb-5">
      <div class="col-lg-2 col-sm-12 mb-2">
        <img src="front/image/gmail.png" alt="">
      </div>
      <div class="col-lg-6 col-sm-12 mb-2 bg-dark rounded-pill text-white text-center pt-4">
        <p class="fs-5">sianture@gmail.com</p>
      </div>
    </div>
    <div class="row justify-content-center pb-5">
      <div class="col-lg-2 col-sm-12 mb-2">
        <img src="front/image/facebook.png" alt="">
      </div>
      <div class="col-lg-6 col-sm-12 mb-2 bg-dark rounded-pill text-white text-center pt-4">
        <p class="fs-5">sianture123</p>
      </div>
    </div>
    <div class="row justify-content-center pb-5">
      <div class="col-lg-2 col-sm-12 mb-2">
        <img src="front/image/instagram.png" alt="">
      </div>
      <div class="col-lg-6 col-sm-12 mb-2 bg-dark rounded-pill text-white text-center pt-4">
        <p class="fs-5">Sianture123</p>
      </div>
    </div>
  </div>
</section>

@endsection