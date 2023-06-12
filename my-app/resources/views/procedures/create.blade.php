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
        class="d-flex justify-content-center align-items-center flex-wrap text-center">
        <form method="POST" action="/procedures">
            @csrf
            <div class="mb-2">
                <label for="name" class="inline-block text-lg mb-2">Name</label>
                <input type="text" id="name" class="form-control" name="name" />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label for="description" class="inline-block text-lg mb-2">Description</label>
                <textarea id="description" class="form-control" name="description" cols="30" rows="10">
                </textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label>Price
                    <input type="number" placeholder="0.00" class="form-control mb-2" name="price" min="0" step="0.01"
                        title="Currency" pattern="^\d+(?:\.\d{1,2})?$"></label>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-2">
                <button class="rounded py-2 px-4">
                    Save
                </button>

                <a href="/clinics" class="text-black ml-4"> Back</a>
            </div>
        </form>
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
