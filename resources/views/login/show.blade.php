@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>User Login</h1>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        
        <div class="container mt-4">
            <form method="POST" action="{{route('login.perform')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"
                        type="text" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address">
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Password</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="password" 
                        placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection