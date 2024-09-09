@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new user</h1>

        <div class="container mt-4">
            <form method="POST" action="{{route('register.perform')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name">

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address">
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username') }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="Username">
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Password</label>
                    <input value="{{ old('password') }}"
                        type="password" 
                        class="form-control" 
                        name="password" 
                        placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input value="{{ old('confirm_password') }}"
                        type="password" 
                        class="form-control" 
                        name="confirm_password" 
                        placeholder="Confirm Password">
                    @if ($errors->has('confirm_password'))
                        <span class="text-danger text-left">{{ $errors->first('confirm_password') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                <p>
                    Already have an account? <a href="{{ route('login.show') }}">Sign in</a>
                </p>
            </form>
        </div>

    </div>
@endsection