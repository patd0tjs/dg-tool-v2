<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- bootstrap 5.3.3 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        {{-- custom css --}}
        <link rel="stylesheet" href="{{ URL::asset('assets/css/template.css') }}">
        <title>DGCS Finance System</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/date-1.5.4/r-3.0.3/sc-2.4.3/datatables.min.css" rel="stylesheet">
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/date-1.5.4/r-3.0.3/sc-2.4.3/datatables.min.js"></script>
    
    </head>
    <body>
        <nav class="navbar d-none d-sm-block" id="nav_stripe">
            <div class="container-fluid d-flex justify-content-center">
              <span class="navbar-text fw-bold p-0">
                    <img src="{{ URL::asset('assets/img/logo.png')}}">
                Divine Grace Center of Studies
              </span>
            </div>
          </nav>
        <nav class="navbar navbar-expand-lg p-3" data-bs-theme="dark" id="nav_main">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item text-center">
                    <a class="nav-link {{ ($page == "Dashboard") ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="nav-item text-center">
                    <a class="nav-link {{ ($page == "Student") ? 'active' : '' }}" href="{{ route('student') }}">Student</a>
                  </li>
                  <li class="nav-item text-center">
                    <a class="nav-link" href="#">Transaction</a>
                  </li>
                  <li class="nav-item text-center">
                    <a class="nav-link" href="#">Fees</a>
                  </li>
                  <li class="nav-item text-center">
                    <a class="nav-link" href="#">Tuition & Misc</a>
                  </li>
                  <li class="nav-item text-center">
                    <a class="nav-link" href="#">Inventory</a>
                  </li>
                    <button class="btn btn-outline-light">Admin</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container p-5">
            @yield('content')
          </div>
    </body>
</html>