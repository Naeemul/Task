<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('/') }}frontend/css/bootstrap.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/responsive.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Naeem's Fashion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('product') }}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About-Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <p class="text-light text-center fs-4">copyright &copy 2023. All rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('/') }}frontend/js/bootstrap.bundle.js"></script>


    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="{{ asset('/') }}frontend/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="{{ asset('/') }}frontend/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="{{ asset('/') }}frontend/js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="{{ asset('/') }}frontend/js/bxslider.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/script.slider.js"></script>
</body>

</html>
