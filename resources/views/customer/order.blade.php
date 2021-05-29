<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body style="background-color: yellow;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('customer.custhome')}}">
            <img src="https://unitech.nyc/wp-content/uploads/2017/10/LogoUnitech01.png" alt="" width="30" height="24" class="d-inline-block align-top">
            Home
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('order')}}">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('customer.product1')}}">Products</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('customer.profile1')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('customer.experts')}}">Experts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('cartlist')}}">Cart</a>
          </li>
        </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('auth.logout') }}">Logout</a>
          </li>
            </ul>
        </form>
      </div>
    </div>
  </nav>
  <br>
<center><h1>Place Your Orders</h1></center>
<br>
<br>
  <form action="/payment_cement" method="get">
  <div class="container">
    <div class="row">
    <hr>
    <p></p>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.dsij.in/Portals/0/EasyDNNnews/7269/img-Budget-2018_cement-770x433.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
<p></p>
<h3>Cement</h3>
<font color="red">In Stock</font><p></p>
<h3>₹ 390 per packet(25kg)</h3>
<input type="text" placeholder="No: of packets" name="c_quantity" class="form-control" required>
<br>
<button type="submit" class="btn btn-primary">Buy Now</button>

        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://thumbs.dreamstime.com/b/white-paper-sacks-cement-bag-wooden-floor-d-rendering-110682168.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
<p></p>
</form>
<form action="/payment_wcement" method="get">
<h3>White Cement</h3>
<font color="red">In Stock</font><p></p>
<h4>₹ 500 per packet(25kg)</h4>
<input type="text" placeholder="No: of packets" name="wc_quantity" class="form-control" required>
<br>
<button type="submit" class="btn btn-primary">Buy Now</button>

        </div>
    </div>
  </div>
  </form>
  <br>
  <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>