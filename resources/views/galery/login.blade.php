@extends('layouts.galery.basic')

@section('content')
<div class="login-container">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="register">don't have account?</label>
            <a href="{{ route('registerForm') }}">register</a>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
@endsection
