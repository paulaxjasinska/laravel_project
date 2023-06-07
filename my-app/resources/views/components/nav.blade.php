<nav class="navbar navbar-expand-lg bg-light position-absolute w-100 mb-12" style="z-index:10">
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
