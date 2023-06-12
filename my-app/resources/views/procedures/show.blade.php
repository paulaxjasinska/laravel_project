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

    <div style="margin-top: 100px; min-height: 500px"
        class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="d-flex justify-content-center w-25 align-items-center flex-wrap text-center">
            <div class="card m-2">
                <div class="card-body" style="min-width: 250px">
                    <h4 class="card-title">{{$procedure->name}}</h4>
                    <p class="card-subtitle mb-2 text-muted">{{$procedure->description}}</p>
                    <p class="card-text">Price: {{$procedure->price}}</p>
                    @if (Auth::check() && auth()->user()->role === 'doctor')
                    <p style="margin: 0">Actions</p>
                    <div class="d-flex justify-content-center align-items-center flex-wrap text-center">
                        <a href="/procedures/{{$procedure->id}}/edit">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000" version="1.1" id="Capa_1" width="20px" height="20px"
                                viewBox="0 0 494.936 494.936" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157    c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21    s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741    c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z" />
                                        <path
                                            d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069    c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963    c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692    C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107    l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005    c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <form action="/procedures/{{$procedure->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: white; border: none;">
                                <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ff0000" width="24"
                                    height="24">
                                    <path
                                        d="M21 4h-4V3c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v1H3c-.6 0-1 .4-1 1s.4 1 1 1h1v14c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6h1c.6 0 1-.4 1-1s-.4-1-1-1zM8 4h8v1H8V4zm8 16H8V8h8v12z" />
                                    <path d="M9 10h2v8H9zM13 10h2v8h-2z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
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
