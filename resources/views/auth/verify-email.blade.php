@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Email Verification Required</h1>
    <p>
        Before proceeding, please check your email for a verification link.
        If you did not receive the email,
    </p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>
</div>
@endsection
