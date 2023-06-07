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
<div class="container" style="margin-top: 100px">
    <div class="col-4 offset-4">
      <form class="d-flex flex-column justify-content-center" method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-3">
          <label for="inputEmail" class="col-form-label">E-mail</label>
          <input type="email" class="form-control" id="inputEmail" name="email">
          @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="col-form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password">
          @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
        </div>
        <div class="mb-3">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Log in</button>
      </form>
    </div>
  </div>



<footer class="container-fluid bg-light fixed-bottom text-center pt-2">
 <div class="row text-center pt-2">
  <p class="text-dark">&copy; Plastic Surgery Clinic</p>
</div>
 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  </body>
</html>
