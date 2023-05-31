<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/clinics">Clinics</a>
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
    <div id="carouselExampleCaptions" class="carousel slide overflow-hidden"  data-bs-ride="false" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="1.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: black">The best doctors</h2>
            <p style="color: black">Doctors work with pleasure and with great experience.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="2.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: black">The best clinics</h2>
            <p style="color: black">Available clinics nationwide with amazing service.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="3.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: black">Well done treatments</h2>
            <p style="color: black">You will surely be satisfied with our services that we offer you.</p>
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


    <footer class="container-fluid bg-light">     <div class="row text-center pt-2">         <p class="text-dark">&copy; Plastic Surgery Clinic</p>     </div> </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </body>
</html>
