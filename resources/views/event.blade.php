<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matrimony </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <style>
            body{
                font-family: 'Sriracha', cursive;
            }
        </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/dashboard') }}" > Dashboard </a>
                        </li>
                    @else
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}" > Login </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('register') }}" > Register </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    </div>

    <div class="container">

        <div class="row py-5">

            @foreach ($events as $event)
                <div class="col-md-6 py-2">
                    <div class="card shadow p-3">
                        <div>
                            <h5 class=""> <strong> Name: </strong> <i>{{ $event->name }}</i> </h5>
                            <h5 class=""> <strong> Fees: </strong> <i> {{ $event->fees }}</i> </h5>
                            <h5 class=""> <strong> Date:</strong>  <i> {{ $event->date }}</i> </h5>
                            <h5 class=""> <strong> Timings:</strong>  <i> {{ $event->timings }}</i> </h5>
                            <h5 class=""> <strong> Address: </strong> <i> {{ $event->address }}</i> </h5>
                        </div>
                        <div>
                            <h5 class=""> <strong> Description: </strong> <i> {{ $event->description }}</i> </h5>
                            <h5 class=""> <strong> Note: </strong> <i> {{ $event->note }}</i> </h5>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
