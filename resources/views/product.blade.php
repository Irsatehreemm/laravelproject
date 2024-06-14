@extends("master")

@section("content")
<div class="color">
<div class="custom-product">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img class="box" src="https://opsg-img-cdn-gl.heytapimg.com/epb/202209/05/a0BEwERRnLO9I5At.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Oppo</h5>
          <p>Provide best quality and functionality</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img class="box" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnBK1yE584jtWGw4i9HSkJn5CJ_BD6OmRLWp_eM80uOJjZ6w7nAL6lkhVPwoNaZNxLqQY&usqp=CAU" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lenovo</h5>
          <p>Provide best quality and functionality</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="box" src="https://lenovo.pk/wp-content/uploads/2022/04/mon1.webp" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>LG lcd</h5>
          <p>Provide best quality and functionality</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="trending_wrapper">
    <h2 class="box1">Trending Products</h2>
    <div class="d-flex flex-wrap">
      @foreach($products as $item)
        <div class="red p-2">
          <a href="detail/{{$item['id']}}">
          <img  src="{{$item['gallery']}}" class="img_slide">
          <div class="">
            <h5>{{$item['name']}}</h5>
          </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection
