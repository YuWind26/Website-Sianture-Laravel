@extends('culture/culture_list/template/app')

@section('content')
<section class="cultureListSianture">
  <img src="../front/image/imgCultureList4.png"  alt="imageIntro4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ms-auto">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="judulCulture col-md-6 offset-md-3" style="font-size: 80px">
        Rumah Adat di Indonesia
      </div>
    </div>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-4 mx-auto">
              <div class="row">
                <div class="col my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button"><a href="/culture/culture-list/culture-detail">Button</a></button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-4 mx-auto">
              <div class="row">
                <div class="col my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
              <div class="row">
                <div class="col  my-3">
                  <img src="../front/image/imgProcessing1.png" alt="">
                  <button class="m-4 btn btn-primary w-50" type="button">Button</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <a href="/culture">
        <img src="../front/image/previous.png" alt="">
      <a>
   



</section>

@endsection