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

        .alert {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            width: 20%;
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #99CCFF">
    <x-nav />
    @include('flash::message')
    <form class="row g-3 justify-content-center" style="overflow: hidden; margin-top: 120px" action="/appointments"
        method="POST">
        @csrf
        <div class="col-md-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" id="name" name="name">
            @error('name')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-3">
            <label for="last_name" class="form-label">Last name</label>
            <input class="form-control" id="last_name" name="last_name">
            @error('last_name')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div class="col-10 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="@example.com" name="email">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Phone number</label>
                    <input type="tel" pattern="\d{3}-\d{3}-\d{3}" class="form-control" id="phone_number"
                        placeholder="510-390-656" name="phone_number">
                    @error('phone_number')
                    <p>{{$message}}</p>
                    @enderror
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
        <div class="row text-center pt-2">
            <p class="text-dark">&copy; Plastic Surgery Clinic</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        const alertDivs = document.querySelectorAll('div.alert:not(.alert-important)');
        setTimeout(function() {
        alertDivs.forEach(function(alertDiv) {
        alertDiv.style.transition = 'opacity 0.35s';
        alertDiv.style.opacity = '0';
        });
        }, 3000);
    </script>
</body>

</html>

