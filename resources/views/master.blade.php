<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/app.css') }} " rel="stylesheet">
    <title>MochiRSP</title>
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="reg">
                    <p class="mb-0">
                        <a href="{{ route('register') }}">Sign Up</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('login') }}">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">MochiRSP</a>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('store')}}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{url('edit')}}" class="nav-link">Product Management</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer class="container-fluid text-center">
    @yield('footer')
</footer>
</body>
</html>
