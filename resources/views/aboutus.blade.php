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
      <table class="table">
    <tr>
        <td><img src="https://m.economictimes.com/thumb/msid-81136491,width-1200,height-900,resizemode-4,imgsize-184392/rera-construction-building.jpg" alt="computer" width="700" height="500"></td>
        <td><img src="https://res.cloudinary.com/fleetnation/image/private/c_fit,w_1120/g_south,l_text:style_gothic2:%C2%A9%20snowing,o_20,y_10/g_center,l_watermark4,o_25,y_50/v1498887857/cakic5obyejs76ofogbq.jpg" alt="computer" width="700" height="500"></td>
    </tr>
    </table>
    </div>
    </div>
    </div>
    
    <table class="table">
        <tr>
            <td><h1><u>Uni Tech</u></h1></td>
        </tr>
        <tr>
            <td> Uni Tech Cement Limited is an Indian cement company based in Mumbai. It is a subsidiary of the Indian multinational conglomerate, Aditya Birla Group.[4] Ultratech is the largest manufacturer of grey cement, ready mix concrete (RMC) and white cement in India with an installed capacity of 116.75 million tonnes per annum, and is the only company in the world to have a capacity of over 100 million tonnes in a single country, outside of China.

UltraTech Cement has 23 integrated plants, 1 clinkerisation plant, 26 grinding units and 7 bulk terminals. Its operations span across India, UAE, Bahrain and Sri Lanka.

In the white cement segment, UltraTech goes to market under the brand name of Birla White. It has a white cement plant with a capacity of 0.68 MTPA and 2 WallCare putty plants with a combined capacity of 0.85 MTPA.

With 100+ Ready Mix Concrete (RMC) plants in 39 cities, UltraTech is the largest manufacturer of concrete in India..</td>
        </tr>
    </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
  </body>
  </html>