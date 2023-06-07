<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plastic Surgery Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #99CCFF;" >
    <x-nav/>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <h3>Customers</h3>
      <br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
            <th scope="col">Procedure</th>
            <th scope="col">Status</th>
            <th scope="col">Accept</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
        @foreach($procedures as $procedure)
            @foreach ($procedure->customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone_number}}</td>
                <td>{{$procedure->name}}</td>
                <td>{{$customer->status}}</td>
                @if ($customer->status === "pending")
                <td><form action="/visits/{{$customer->id}}" method="POST">
                    @csrf
                    @method("PUT")
                    <button>Accept</button>
                </form>
                </td>
                @else
                <td></td>
                @endif
                <td><form action="/visits/{{$customer->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ff0000" width="24"
                            height="24">
                            <path
                                d="M21 4h-4V3c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v1H3c-.6 0-1 .4-1 1s.4 1 1 1h1v14c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6h1c.6 0 1-.4 1-1s-.4-1-1-1zM8 4h8v1H8V4zm8 16H8V8h8v12z" />
                            <path d="M9 10h2v8H9zM13 10h2v8h-2z" />
                        </svg>
                    </button>
                </form></td>
              </tr>
            @endforeach
        @endforeach
        </tbody>
      </table>
    </div>

    <footer class="container-fluid bg-light fixed-bottom text-center pt-2">
      <div class="row text-center pt-2">
        <p class="text-dark">&copy; Plastic Surgery Clinic</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
