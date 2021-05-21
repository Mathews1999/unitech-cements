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
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <table class="table table-borderless" >
              <tr>
                  <td><h1><u>Enquiry/Feedback</u></h1></td>
              </tr>
              <tr>
                  <td>Name</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Contact No</td>
                  <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>Enquiry/feedback</td>
                  <td><textarea id="w3review" name="w3review" rows="4" cols="30"></textarea></td>
              </tr>
              <tr>
                  <td></td>
                  <td><button class="btn btn-success">Submit</button></td>
              </tr>
            </table>
        </div>
        
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card text-white bg-success mb-3" style="max-width: 23rem;">
                    <div class="card-header"><h1>Registered Office</h1></div>
                    <div class="card-body">
                        <p class="card-text"><h6>Registered Office,
                            <br>"B" Wing, 2nd floor, Ahura Centre Mahakali Caves Road, 
                        <br>Andheri (East) Mumbai 400 093,
                        <br>Mumbai, India. <br><br> Email  :unitech@gmail.com
                       <br>
                       <br><br>PhoneNo :+91 7054387211
                       <br><br>Landline:+474 23467854</h6>
                    </div>
                    </div>
               </div>
               </div>
</div>

  <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"></div>
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card text-white bg-success mb-3" style="max-width: 23rem;">
                    <div class="card-header"><h1>Legal Department</h1></div>
                    <div class="card-body">
                        <p class="card-text"><h6>Legal Department
                            <br>Christo Babu,"B" Wing, 2nd floor, Ahura Centre Mahakali Caves Road, 
                        <br>Andheri (East) Mumbai 400 093,
                        <br>Mumbai, India. <br><br> Email  :christo111@gmail.com
                       <br><br>
                       <br><br>PhoneNo :+91 9825736410
                       <br><br>Landline:+474 24856971</h6>
                    </div>
                    </div>
                </div>
                </div>
                
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
  </body>
  </html>