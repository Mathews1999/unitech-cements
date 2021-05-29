<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
           <div class="col-md-4 col-md-offset-4"></div>
            <div class="col-md-4 col-md-offset-4">
            <form action="/customer/fupdate" method="post" >
            {{csrf_field()}}
            @if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
            <h4><center> Customer Profile</center></h4><hr>
            <table class="table table-borderless">
            <input type="text" name="id" value="{{ $LoggedUserInfo['id'] }}" hidden>
            <tr>
              <td>Name</td>
              <td><input type="text" class="form-control" name="name"  value="{{ $LoggedUserInfo['name'] }} ">
              <span class="text-danger">@error('name'){{ $message }} @enderror</span></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><textarea name="Address" id="Address" rows="4"  cols="55" placeholder="Enter Address"  >{{ $LoggedUserInfo['Address'] }}</textarea>
              <span class="text-danger">@error('Address'){{ $message }} @enderror</span></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input type="text" class="form-control" name="phone"  value="{{ $LoggedUserInfo['phone'] }} ">
              <span class="text-danger">@error('phone'){{ $message }} @enderror</span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="text" class="form-control" name="email"  value="{{ $LoggedUserInfo['email'] }} ">
              <span class="text-danger">@error('email'){{ $message }} @enderror</span></td>
            </tr>
            <tr>
            <td></td>
            <td><button class="btn btn-success" type="submit">Update</button></td>
            </tr>
            </table>
        </div>
   </div>
</body>
</html>
