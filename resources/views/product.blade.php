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
                      <li><a class="dropdown-item" href="{{route('auth.compregister')}}">Company Reg</a></li>
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
                      <li><a class="dropdown-item" href="{{route('auth.login')}}">Company</a></li>
                    </ul>
            </ul>
        </form>
      </div>
    </div>
  </nav>


  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://www.dsij.in/Portals/0/EasyDNNnews/7269/img-Budget-2018_cement-770x433.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cement</h5>
        <p class="card-text">UniTech cement is the ultimate 360° building materials destination, providing an array of products ranging from grey cement to white cement, from building products to building solutions and an assortment of ready mix concretes catering to the varied needs and applications.is the most commonly used cement for a wide range of applications. These applications cover ordinary, standard, high strength concretes, masonry and plastering works, precast concrete products for e.g., blocks, pipes etc., and specialized works such as precast and prestressed concrete..</p>
        <a href="{{route('auth.custlogin')}}" class="btn btn-primary">Order</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://thumbs.dreamstime.com/b/white-paper-sacks-cement-bag-wooden-floor-d-rendering-110682168.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> White Cement</h5>
        <p class="card-text">Uni White, the leading white cement brand in India, has positioned itself as the "Whitest White Cement". Birla White commenced production of white cement in 1988. Since then, the consumer has been exposed to the endless possibilities of applications with white cement. Birla White was also quick to gauge and understand the customer pulse and his growing aspirational requirements. In the process, it developed and introduced a slew of innovative, white cement-based surface finishing products. The current portfolio includes WallCare Putty, Levelplast, GRC and Textura. Among them, they facilitate care for walls and augment interior appeal.Birla White being the "Whitest White Cement" offers a pristine white canvas for crafting architectural elegance. It's the key ingredient in the application of decorative cement paints, mosaic tiles, terrazzo floorings and marble laying. Its remarkably high refractive index and high opacity imparts a gleaming luster and smooth finish to surfaces. Besides, it's also a significant constituent in wall finishes such as Grit Wash, Stonecrete and Tyrolean.</p>
        <a href="{{route('auth.custlogin')}}" class="btn btn-primary">Order</a>
        </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
  </body>
  </html>

