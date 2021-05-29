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
<div id="hide">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('company.comphome')}}">
            <img src="https://unitech.nyc/wp-content/uploads/2017/10/LogoUnitech01.png" alt="" width="30" height="24" class="d-inline-block align-top">
            Home
          </a>   
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/vieworders">Orders</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/viewfeedback">View Feedbacks</a>
          </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('company.profile')}}">Profile</a>
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
  </div>


  <style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>



<div class="container">
<h1><center><u>Feedback Details</center></u></h1>

<form class="d-flex" method="post" action="/feedbacksearch">
      {{csrf_field() }}
      <div id="hide">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="fename">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <div style="text-align:left"> <div class="text-right"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div></div>
</nav>
</div>
    
    <table class="table">
    <tr>
        <th style="background-color:black ; color:white;"><center>SL NO</center></th>
        <th style="background-color:black ; color:white;"><center>Name</center></th>
        <th style="background-color:black ; color:white;"><center>Email</center></th>
        <th style="background-color:black ; color:white;"><center>Contavct No</center></th>
        <th style="background-color:black ; color:white;"><center>Feedback</center></th>

        
    </tr>
    
    @foreach($feedbackform as  $feedback)
            <tr>
                <td><center>{{ $feedback->id }}</center></td>
                <td><center>{{ $feedback->Name }}</center></td>
                <td><center>{{ $feedback->Email }}</center></td>
                <td><center>{{ $feedback->ContactNo }}</center></td>
                <td><center>{{ $feedback->FeedBack }}</center></td>

            </tr>
            @endforeach
        
            </table> 
    </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>


