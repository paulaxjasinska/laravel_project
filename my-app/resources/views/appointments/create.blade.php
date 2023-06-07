<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plastic Surgery Clinic</title>
    <style>
      body {
        overflow: hidden;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #99CCFF">
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
            @auth
            <li style="text-align: center;">
                    Hello {{auth()->user()->name}}
            </li>
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
</div>
<br>
<br>

<form class="row g-3 justify-content-center" style="overflow: hidden;" action="/appointments" method="POST">
    @csrf
  <div class="col-md-3">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" id="name" name="name">
  </div>
  <div class="col-md-3">
    <label for="last_name" class="form-label">Last name</label>
    <input class="form-control" id="last_name" name="last_name">
  </div>
  <div class="col-10 d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="@example.com" name="email">
      </div>
      <div class="col-md-6">
        <label for="phone_number" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="phone_number" placeholder="510-390-656" name="phone_number">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="procedure" class="form-label">Procedure</label>
    <select id="procedure" class="form-select" name="procedure">
        @foreach($procedures as $procedure)
            <option value={{$procedure->id}}>{{$procedure->name}} ({{$procedure->price}} EUR)</option>
        @endforeach
    </select>
  </div>
  <div class="col-10 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Make an appointment</button>
  </div>
</form>




<footer class="container-fluid bg-light fixed-bottom text-center pt-2">
 <div class="row text-center pt-2">         <p class="text-dark">&copy; Plastic Surgery Clinic</p>
</div>
 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
