@extends('layouts.app')
@section('title', 'Login Page')
@section('content')
    
<!-- Login Form -->
<div class="auth-card mt-5">
  <h4 class="text-center mb-4">Login</h4>
  <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="mb-3">
      <label for="login" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required />
      @error('email')
          <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" required />
      @error('password')
          <p style="color: red">{{ $message }}</p>
      @enderror

      <div class="text-end mt-1">
        <a href="{{ route('password.request') }}" class="text-sm text-muted">Forgot Password?</a>
      </div>
    </div>
    
    <div class="text-center my-4">
  <p class="text-muted">or login with</p>
  <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('login.google') }}" class="btn btn-outline-danger d-flex align-items-center gap-2 px-3">
        <i class="fab fa-google"></i> Google
      </a>
    <button type="button" class="btn btn-outline-primary d-flex align-items-center gap-2 px-3">
      <i class="fab fa-facebook-f"></i> Facebook
    </button>
  </div>
</div>


    <button type="submit" class="btn btn-dark w-100">Login</button>

    <div class="text-center mt-3">
      <a href="{{ route('register') }}">Don't have an account? Register</a>
    </div>
  </form>
</div>
@endsection
