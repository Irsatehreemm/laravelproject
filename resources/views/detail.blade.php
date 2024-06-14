@extends("master")

@section("content")

<div class="container">
    <div class="row">
<div class="col-sm-6">
<img  class="detail_img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/">Go Back</a>
<h2>Name : {{$product['name']}}</h2>
<h4>Price : {{$product['price']}}</h4>
<h4>Category : {{$product['category']}}</h4>
<h4>Description : {{$product['description']}}</h4  >
<form action="/add_to_cart" method="POST">
    <input type="hidden" name="product_id" value="{{$product['id']}}">
    @csrf
<button type="submit" class="btn btn-primary">Add To Cart</button>
</form>  
<br></br>
<button type="button" class="btn btn-success">By Now</button>
</div>
    </div>
</div>
@endsection
