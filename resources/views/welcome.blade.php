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
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.bdcmagazine.com/files/uploads/2020/05/ciin.jpeg" class="d-block w-100" alt="..." width="500" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>Trust in us</h5>
        <p>Trust is the base of everything.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://constructech.com/wp-content/uploads/2019/04/News_Analysis_smart_4_19.jpg" class="d-block w-100" alt="..."width="500" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>Growth</h5>
        <p>Rise of Smart cities.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media-exp1.licdn.com/dms/image/C561BAQHp_IBn9NlgEg/company-background_10000/0/1600877432120?e=2159024400&v=beta&t=_I9_UKCCQDZL9mCGMCf9i8r9e1EX-cC9WBylqdSTQNo" class="d-block w-100" alt="..."width="500" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>House are build once</h5>
        <p>Your dream is safe in our hands.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRicNSX7AGP3AtAYytka2vILBOJ8Fy5uyeeFMtbLLDP0s1rrX7sKSRudgufsrv9s2NHrM4&usqp=CAU" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Selecting Material CheckList</h5>
        <p class="card-text">1.Always buy building materials from authorised dealers and reputed brands. <br>2.Source materials locally to save transport costs. <br>3.Consult your engineer for the right material as per your specific needs and budget.</p>
      </div>
    </div>
  </div>
</div>

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Cement
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>UniTech is the largest manufacturer of concrete in India.</strong> UniTech cement is the ultimate 360° building materials destination, providing an array of products ranging from grey cement to white cement, from building products to building solutions and an assortment of ready mix concretes catering to the varied needs and applications.is the most commonly used cement for a wide range of applications. These applications cover ordinary, standard, high strength concretes, masonry and plastering works, precast concrete products for e.g., blocks, pipes etc., and specialized works such as precast and prestressed concrete.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        White Cement
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>Uni White Cement.</strong>Birla White, the leading white cement brand in India, has positioned itself as the "Whitest White Cement". Birla White commenced production of white cement in 1988. Since then, the consumer has been exposed to the endless possibilities of applications with white cement. Birla White was also quick to gauge and understand the customer pulse and his growing aspirational requirements. In the process, it developed and introduced a slew of innovative, white cement-based surface finishing products. The current portfolio includes WallCare Putty, Levelplast, GRC and Textura. Among them, they facilitate care for walls and augment interior appeal.Birla White being the "Whitest White Cement" offers a pristine white canvas for crafting architectural elegance. It's the key ingredient in the application of decorative cement paints, mosaic tiles, terrazzo floorings and marble laying. Its remarkably high refractive index and high opacity imparts a gleaming luster and smooth finish to surfaces. Besides, it's also a significant constituent in wall finishes such as Grit Wash, Stonecrete and Tyrolean.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        White Topping Concrete
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>Damaged roads: the long-standing problem.</strong> As a result of rapid urbanization, close to 35% of Indians now live in urban areas and commute on city roads more than ever before. When coupled with the fact that India has the 4th largest auto market in the world, our roads are only going to get more congested with vehicles in years to come. This places tremendous pressure on our roads, resulting in cracks and dangerous potholes. In fact, in the last four years, over 11,000 people have died due to pothole-related accidents. Whilst these problems have persisted, there hasn’t been a long-term solution that brings relief to roads and commuters alike.
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>
  @yield('content')
