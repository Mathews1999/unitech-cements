<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

  <div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <br>
            <center><h3>Make Payment</h3></center>
            <br>
            <br>
            <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <font color="white"><h5>Online Payment</h5></font>
  </div>
</nav>
<br>
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <form action="/payment_save" action="get">
                <div class="form-group">
                    <label><h6>Name on card</h6></label>
                    <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Name" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>Card number</h6></label>
                    <input type="text-number" name="card_no" autocomplete="off" class="form-control card-number" placeholder="Card number" required>
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>CVC</h6></label>
                    <input type="text" name="cvc" placeholder="CVC" autocomplete='off' required class="form-control card-cvc">
                </div>
                <p></p>
                <div class="form-group">
                    <label><h6>Expiration</h6></label>
                    <input type="text" class="form-control card-expiry-month" name="exp_month" placeholder="MM" required>
                    <p></p>
                    <input type="text" class="form-control  card-expiry-year" name="exp_year" placeholder="YYY" required>
                </div>
                <br>
                <div class="d-grid gap-2">
  <button class="btn btn-primary btn-lg" type="submit">Pay</button>
</div>
            </form>
            <br>
            <br>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>