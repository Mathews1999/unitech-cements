<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body style="background-color: yellow;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <img src="https://unitech.nyc/wp-content/uploads/2017/10/LogoUnitech01.png" alt="" width="30" height="24" class="d-inline-block align-top">
            UniTech
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
                      <li><a class="dropdown-item" href="{{route('auth.compregister')}}">Company Reg</a></li>
                    </ul>
            </ul>
        </form>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('list')}}">Companies</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
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
                      <li><a class="dropdown-item" href="{{route('auth.login')}}">Company</a></li>
                    </ul>
            </ul>
        </form>
      </div>
    </div>
  </nav>
   <div class="container">
        <div class="row">
           <div class="col-md-4 col-md-offset-4"></div>
            <div class="col-md-4 col-md-offset-4">
            <h4>Company list</h4><hr>
            <table class="table table-hover">
            <thead>
                <th>Company name</th>
                <th>Address</th>
                <th>Phone No</th>
                <th>Email</th>
            </thead>
            <tbody>
            @foreach($data as $i)
                <tr>
                    <td>{{ $i->companyname }}</td>
                    <td>{{ $i->Address }}</td>
                    <td>{{ $i->phone }}</td>
                    <td>{{ $i->email }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
                  
            </div>   
            <div class="col-md-4 col-md-offset-4"></div>
        </div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    

</body>
</html>

