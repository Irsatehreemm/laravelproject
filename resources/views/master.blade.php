<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <title>e_commerce_project</title>
</head>
<body>

@include('header')

<div class="container mt-4">
  @yield('content')
</div>

@include('footer')

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<style>
  .custom-login {
    height: 600px;
    padding: 100px;
    
  }

  .box {
    width: 30%;
    height: 400px;
  }

  .img_slide {
    height: 100px;
  }

  .red {
    float: left;
    width: 25%;
  }

  .custom-product {
    margin-bottom: 50px;
  }

  .trending_wrapper {
    margin: 30px 0;
  }

  .trending_wrapper img {
    height: 100px;
  }
  .box1{
    text-align: center;  /* Center text horizontally */
      color: red;
  }

  footer {
    background-color: #f8f9fa;
    padding: 20px 0;
    text-align: center;

  }
  .color{
    background-color:lightgray;
  }
  .detail_img{
    height: 200px;
  }
  .search_item{
    width: 500px;
  }
</style>
