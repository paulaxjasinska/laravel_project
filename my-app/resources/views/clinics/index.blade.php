<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #99CCFF;">
    <x-nav/>

    <br>
    <br>
    <br>
    <br>
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
