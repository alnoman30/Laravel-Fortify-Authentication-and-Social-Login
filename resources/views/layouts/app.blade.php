<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> @yield('title')</title>
  </head>
  <body>
      <style>
    body {
      background: #f8f9fa;
    }
    .auth-card {
      max-width: 400px;
      margin: auto;
      margin-top: 60px;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    footer {
      background: #343a40;
      color: white;
      padding: 15px 0;
    }
  </style>
  <!-- Header -->
<header class="bg-dark text-white p-3">
  <div class="container d-flex justify-content-between align-items-center">
    <h3 class="mb-0">MyApp</h3>

    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-light btn-sm">Logout</button>
    </form>
    @else
    <div>
        <a href="{{ route('login') }}" class="btn btn-light btn-sm me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">Register</a>
    </div>
    @endauth
  </div>
</header>
@if (Auth::user() && ! Auth::user()->hasVerifiedEmail())
    <div class="alert alert-warning">
        Please verify your email. <a href="{{ route('verification.notice') }}">Verify now</a>
    </div>
@endif
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>