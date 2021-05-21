<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body style="background-color: yellow;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <img src="https://unitech.nyc/wp-content/uploads/2017/10/LogoUnitech01.png" alt="" width="30" height="24" class="d-inline-block align-top">
            Unitech
          </a>   
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Registeration
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('auth.custregister')}}">Customer Reg</a></li>
                    </ul>
            </ul>
        </form>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('product')}}">Products</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('aboutus')}}">About Us</a>
          </li>
        </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('auth.custlogin')}}">Customer</a></li>
                      <li><a class="dropdown-item" href="{{route('auth.login')}}">Admin</a></li>
                    </ul>
            </ul>
        </form>
      </div>
    </div>
  </nav>
   <div class="container">
        <div class="row" style="margin-top:45px">
           <div class="col-md-4 col-md-offset-4"></div>
            <div class="col-md-4 col-md-offset-4">
                <h4>Customer Registeration</h4><hr>
                <form action="{{ route('auth.save1') }}" method="post">
                @if(Session::get('success'))
                <div class="alert alert-success">
                   {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                   {{ Session::get('fail') }}
                </div>
                @endif
                @csrf
                <div class="form-group">
                       <label>Name</label>
                       <input type="text" class="form-control" name="name" placeholder="Enter Name"value="{{ old('name') }}">
                       <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                       <label>Address</label>
                       <textarea name="Address" id="Address" rows="4"  cols="55" placeholder="Enter Address"value="{{ old('Address') }} "></textarea>
                       <span class="text-danger">@error('Address'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                       <label>Phone</label>
                       <input type="text" class="form-control" name="phone" placeholder="Enter Phone"value="{{ old('phone') }}" >
                       <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" >
                       <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                       <label>Password</label>
                       <input type="password" class="form-control" name="password" placeholder="Enter Password">
                       <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                       <label>Confirm Password</label>
                       <input type="password" class="form-control" name="confirmpassword" placeholder="Enter Password">
                       <span class="text-danger">@error('confirmpassword'){{ $message }} @enderror</span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    <br>
                    <a href="{{route('auth.custlogin')}}">I already have an account,Go to login</a>                   
                </form>
            </div>
            <div class="col-md-4 col-md-offset-4"></div>
        </div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    

</body>
</html>