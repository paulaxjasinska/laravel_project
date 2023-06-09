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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Clinics</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Treatments
                        </a>
                        <ul class="dropdown-menu">
                            @auth
                            <li>
                                Hello {{auth()->user()->name}}
                            </li>
                            <li>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit">
                                        Log out
                                    </button>
                                </form>
                            </li>
                            @else
                            <li><a class="dropdown-item" href="/customers">Make an appointment</a></li>
                            <li><a class="dropdown-item" href="/login">Log in</a></li>
                            @endauth
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <br>
        <h3>Customers</h3>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Procedure</th>
                    <th scope="col">Clinic</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone_number}}</td>
                    <td>{{$customer->procedure->name}}</td>
                    <td>{{$customer->procedure->clinic->name}}</td>
                    <td>{{$customer->procedure_price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
