<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

        {{-- bootstrap 5.3.3 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        {{-- custom css --}}
        <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}">
        <title>DGCS Finance System</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="row p-0 m-0 template">
            {{-- left section --}}
            <div class="col-lg p-5 d-none d-lg-block position-relative" id="left">
                <div class="position-absolute top-50 start-50 translate-middle p-0 m-0">
                    <img src="{{ URL::asset('img/login-figure.png')}}" class="img-fluid">
                    <h1 id="figure_label" class="fs-1 fw-bold">
                        Divine Grace Center of Studies 
                        <br>
                        <span class="badge text-bg-primary ps-4 pe-4">Finance</span>
                    </h1>
                </div>
            </div>

            {{-- right section --}}
            <div class="col-lg pt-5" id="right">
                <div class="p-5">
                    <img src="{{ URL::asset('img/logo.png')}}" class="img-fluid mt-5 mb-3">
                    <br>
                    <h2 id="auth_title" class="mb-4"><strong>{{ $title }}</strong></h2>
                    @yield('content')
                </div>
            </div>
        </div>

        @include('components/loader')
    </body>
</html>