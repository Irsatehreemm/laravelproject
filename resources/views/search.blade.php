@extends("master")

@section("content")
<div class="color">
<div class="custom-product">


  <div class="trending_wrapper">
    <h4 class="box1">your search result are here</h4>
    <div class="d-flex flex-wrap">
      @foreach($products as $item)
        <div class="red p-2">
          <a href="detail/{{$item['id']}}">
          <img  src="{{$item['gallery']}}" class="img_slide">
          <div class="">
            <h2>{{$item['name']}}</h2>
            <h4>{{$item['description']}}</h4>
          </div>
          </a>
        </div>
      @endforeach
  
</div>
</div>
@endsection
