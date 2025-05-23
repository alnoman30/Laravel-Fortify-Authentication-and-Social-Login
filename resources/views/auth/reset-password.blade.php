@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')

<div class="auth-card mt-5">
  <h4 class="text-center mb-4">Reset Password</h4>

  <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ request()->route('token') }}">

    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email" value="{{ old('email', request()->email) }}" required>
      @error('email') <p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">New Password</label>
      <input type="password" class="form-control" name="password" required>
      @error('password') <p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm New Password</label>
      <input type="password" class="form-control" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-dark w-100">Reset Password</button>
  </form>
</div>
@endsection
