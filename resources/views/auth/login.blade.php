@extends('auth.template')

@section('content')
    <form method="POST" class="ps-5 pe-5" action="{{ route('login') }}">
        @csrf

        {{-- email input --}}
        <div class="row mb-3 text-start input-container">
            <div class="col-12">
                <label class="fs-5">Email</label>
                <input type="email" class="form-control border-primary" name="email" required>
            </div>
        </div>

        {{-- password input --}}
        <div class="row mb-3 text-start input-container">
            <div class="col-12">
                <label class="fs-5">Password</label>
                <input type="email" class="form-control border-primary" name="password" required>

                {{-- forgot password link --}}
                <p class="text-end mt-1">
                    <a class="text-sm text-black" href="{{ route('password.request') }}">
                        Forgot Password
                    </a>
                </p>
            </div>
        </div>

        {{-- submit button --}}
        <button type="submit" class="btn btn-primary fs-6 mt-2 ps-4 pe-4">Sign In</button>
    </form>
@endsection