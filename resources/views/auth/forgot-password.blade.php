@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

<div class="auth-card mt-5">
  <h4 class="text-center mb-4">Forgot Your Password?</h4>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus>
      @error('email')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit" class="btn btn-dark w-100">Send Reset Link</button>
  </form>
</div>
@endsection
