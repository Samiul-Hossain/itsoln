<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     <script src="{{ asset('js/script.js') }}" defer></script>
     <!-- Styles -->
     <link href="css/app.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>ItSolution</title>
</head>
<body class="">
<header class="fixed-top bg-dark"> 
    <div class="container d-flex align-items-center">
        <a href="{{ url('/') }}"><i class="mobi logo mr-auto"></i>
            <img src="http://infohive.com.bd/assets/template/img/logo.png" alt="" class="img-fluid">
        </a>
            <button id="hamburger" class="hamburger ms-auto" onclick="tgFunc()">
                <i class="fas fa-bars"></i>
            </button>
        <nav class= "nav nav-menu d-lg-block mx-auto">
            <ul class="nav-ul flex text-sm " id="nav-ul">
                <li><a class=" fs-6" href="/">Home</a></li>
                <li><a class=" fs-6" href="/product-services">Products & Services</a></li>
                <li><a class=" fs-6" href="/">Technology</a></li>
                <li><a class=" fs-6" href="/tech-collaborators">Tech Collaborators</a></li>
                <li><a class=" fs-6" href="/">Blog & Buzz Feed</a></li>
                <li><a class=" fs-6" href="/contacts">Contact Us</a></li>
                
            </ul>
        </nav>
    </div>
</header>
    <div>
        @yield('content')
    </div>

    <div>
        @include('layouts.footer')
    </div>
</body>
</html>