<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cement Sale</title>
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

  <h4><center>Order Summary</center></h4>
 <br>
<div class="container">
<div class="row ">

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<div  class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<table class="table table-striped table-secondary">
    
      <tr>
        <td>Amount</td>
        <td>{{$sum}}</td>
      </tr>
      <tr>
        <td>GST</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>300</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$sum+350}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
      {{csrf_field()}}
  
  <div class="form-group"><br>
    <label for="pwd">Select a payment method</label><br>
    <input type="radio" value="card" name="payment"  required>&nbsp;&nbsp;<span>Debit/Credit card</span><br>
    <input type="radio" value="cod" name="payment"  required>&nbsp;&nbsp;<span>Cash On delivery</span><br><br>
    <center> <button type="submit" class="btn btn-primary">Order Now</button></center>
</form>
  </div>
 </div>
 </div>
 <div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>