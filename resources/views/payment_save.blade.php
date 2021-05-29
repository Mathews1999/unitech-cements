<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }
        body{
            display:grid;
            height:100%;
            place-items:center;
        }
        label{
            position:relative;
            height:180px;
            width:180px;
            display:inline-block;
            border:3px solid rgba(0,0,0,0.2);
            border-radius:50%;
            border-color:#5cb85c;

        }
        label .check-icon{

        }
        label .check-icon:after{
            position:absolute;
            content:"";
            top:75px;
            left:89px;
            transform:translate(-50%, -50%) scaleX(-1) rotate(135deg);
            height:60px;
            width:28px;
            border-top:4px solid #5cb85c;
            border-right:4px solid #5cb85c;

        }
    </style>
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
  <br>
  <label>
        <di class="check-icon">

        </di>
    </label>
    <br>
    <h1>Thank You</h1>
    <h5>Payment hasbeen successful</h5>
    <br>
    <br>
    <a href="{{route('customer.custhome')}}" type="Submit" class="btn btn-primary btn-lg">&nbsp; Go to Home &nbsp;</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>