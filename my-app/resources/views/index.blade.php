<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .contentWrapper {
          height: 100vh;
          overflow: hidden;
        }

        .item1 {
          background-image: url("1.jpg");
          height: 95vh;
          background-size: cover;
          background-position: right 35% bottom 45%;
        }

        .item2 {
          background-image: url("2.jpg");
          height: 95vh;
          background-size: cover;
          background-position: right 35% bottom 45%;
        }

        .item3 {
          background-image: url("3.jpg");
          height: 95vh;
          background-size: cover;
          background-position: right 35% bottom 45%;
        }
      </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light position-absolute w-100" style="z-index:10">
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
                @auth
            <li style="text-align: center;">
                    Hello {{auth()->user()->name}}
            </li>
            @if (auth()->user()->role === 'doctor')
               <a href="/visits" style="color: black; text-align: center;"><li>Your visits</li></a>
            @endif
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" style="text-align: center;">
                        Log out
                    </button>
                </form>
            </li>
            @else
            <li><a class="dropdown-item" href="/appointments">Make an appointment</a></li>
            <li><a class="dropdown-item" href="/login">Log in</a></li>
            @endauth
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>
            <li class="nav-item">
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="contentWrapper">
        <div id="carouselExampleCaptions" class="carousel slide overflow-hidden"  data-bs-ride="false" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="item1 w-100">
                </div>
              </div>
              <div class="carousel-item">
                <div class="item2 w-100">

                </div>
              </div>
              <div class="carousel-item">
                <div class="item3 w-100">

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
          <footer class="container-fluid bg-light">
            <div class="row text-center pt-2">
                <p class="text-dark">&copy; Plastic Surgery Clinic</p>
            </div>
        </footer>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </body>
</html>
