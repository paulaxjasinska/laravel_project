<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #99CCFF;">
    <x-nav />

    <div style="margin-top: 100px; min-height: 800px">
        <h3 class="text-center">
            @if (Auth::check() && auth()->user()->role === 'doctor')
            Your clinic
            @else
            Our clinicks
            @endif
        </h3>
        <div class="d-flex justify-content-center align-items-start flex-wrap">
            @if (Auth::check() && auth()->user()->role === 'doctor')
            <div class="card m-2" style="min-height: 400px">
                <div class="card-body">
                    <h4 class="card-title">{{$clinic->name}}</h4>
                    <p class="card-subtitle mb-2 text-muted">{{$clinic->city}}</p>
                    <p class="card-text">{{$clinic->email}}</p>
                    <p class="card-text">{{$clinic->phone_number}}</p>
                    <h3>Available procedurs</h3>
                    <ul>
                        @foreach ($clinic->procedures as $procedure)
                        <li><a href="/procedures/{{$procedure->id}}">{{$procedure->name}}</a></li>
                        @endforeach
                    </ul>
                    <a href="/procedures/create">Add new procedure</a>
                </div>
            </div>
            @else
            @foreach($clinics as $clinic)
            <div class="card m-2" style="min-height: 400px">
                <div class="card-body">
                    <h4 class="card-title">{{$clinic->name}}</h4>
                    <p class="card-subtitle mb-2 text-muted">{{$clinic->city}}</p>
                    <p class="card-text">{{$clinic->email}}</p>
                    <p class="card-text">{{$clinic->phone_number}}</p>
                    <h3>Available procedurs</h3>
                    <ul>
                        @foreach ($clinic->procedures as $procedure)
                        <li><a href="/procedures/{{$procedure->id}}">{{$procedure->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <footer class="container-fluid bg-light fixed-bottom text-center pt-2">
        <div class="row text-center pt-2">
            <p class="text-dark">&copy; Plastic Surgery Clinic</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
