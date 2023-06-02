<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #99CCFF;">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Clinics</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Treatments
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/appointments">Make an appointment</a></li>
            <li><a class="dropdown-item" href="/login">Log in</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<br>
<br>
<h3 class="text-center">Our Clinics</h3>
<br>
<div class="d-flex justify-content-center flex-wrap">
@foreach($clinics as $clinic)
<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h4 class="card-title">{{$clinic->name}}</h4>
    <p class="card-subtitle mb-2 text-muted">{{$clinic->city}}</p>
    <p class="card-text">{{$clinic->email}}</p>
    <p class="card-text">{{$clinic->phone_number}}</p>
  </div>
</div>
@endforeach
</div>

<footer class="container-fluid bg-light fixed-bottom text-center pt-2">
 <div class="row text-center pt-2">         <p class="text-dark">&copy; Plastic Surgery Clinic</p>
</div>
 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>