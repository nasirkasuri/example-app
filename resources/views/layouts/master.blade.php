// resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ahson Traders')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.components.navbar')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('layouts.components.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

// resources/views/components/navbar.blade.php
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Ahson Traders</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

// resources/views/components/footer.blade.php
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; {{ date('Y') }} Ahson Traders. All Rights Reserved.</p>
</footer>

// resources/views/components/quote.blade.php
<div class="container my-5">
    <h2 class="text-center">Get A Free Quote</h2>
    <form>
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Mobile">
            </div>
            <div class="col-md-6">
                <select class="form-control">
                    <option selected>Select A Service</option>
                    <option>Solar Panel Installations</option>
                    <option>Solar Panel Cleaning</option>
                    <option>System Maintenance</option>
                </select>
            </div>
            <div class="col-12">
                <textarea class="form-control" placeholder="Special Note"></textarea>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

// resources/views/home.blade.php
@section('title', 'Home')
@section('content')
@include('layouts.components.navbar')
    @include('layouts.components.quote')
    @include('layouts.components.team')
    @include('layouts.components.testimonials')
@endsection
