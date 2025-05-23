@extends('layouts.app')
@section('title', 'Register Page')
@section('content')
 <section>
      <!-- Registration Form -->
  <div class="auth-card mt-5">
    <h4 class="text-center mb-4">Register</h4>
    <form action="{{ route('register')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}" required />
        @error('name')
            <p style="color: red">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" value="{{ old('username')}}"  />
        @error('username')
            <p style="color: red">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email"value="{{ old('email')}}" required />
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
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password" required />
        @error('password_confirmation')
            <p style="color: red">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-dark w-100">Register</button>
      <div class="text-center mt-3">
        <a href="{{ route('login')}}">Already have an account? Login</a>
      </div>
    </form>
  </div>
</section>
@endsection