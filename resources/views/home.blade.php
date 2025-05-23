@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<!-- Hero Section -->
<section class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome to MyApp</h1>
    <p class="lead">A modern Laravel application powered by Fortify and Bootstrap 5.</p>
    <a href="{{ route('register') }}" class="btn btn-success btn-lg mt-3">Get Started</a>
  </div>
</section>
      <div class="text-end mt-1">
        <a href="{{ route('password.change') }}" class="btn btn-info text-sm text-muted">Reset password</a>
      </div>
<!-- Features Section -->
<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm">
          <h4>User Authentication</h4>
          <p>Secure login, registration, and password reset using Laravel Fortify.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm">
          <h4>Modern Design</h4>
          <p>Clean UI with reusable layout and components using Bootstrap 5.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border rounded shadow-sm">
          <h4>Scalable Setup</h4>
          <p>Structured for scaling features with authentication and middleware.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="bg-dark text-white py-5">
  <div class="container text-center">
    <h2 class="fw-bold">Start building with MyApp today</h2>
    <p class="mb-4">Easy to use, extensible, and secure. Perfect for your next project.</p>
    <a href="{{ route('register') }}" class="btn btn-light btn-lg">Join Now</a>
  </div>
</section>

@endsection
