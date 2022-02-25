<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Elegance - Creative HTML5 Template</title>
    <!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullpage.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about/edit">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/skills/edit">Skills</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/contact/edit">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/works">Works</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/works">Works</a>
            </li>
          </ul>
        </div>
      </nav>
    @yield('content')
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/fullpage.min.js') }}"></script>

    <script src="{{ asset('js/scrolloverflow.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/jquery.inview.min.js') }}"></script>

    <script src="{{ asset('js/form.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>